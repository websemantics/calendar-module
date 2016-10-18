<?php namespace Websemantics\CalendarModule\Calendar\Event\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Anomaly\UsersModule\User\Command\GetUser;
use Anomaly\Streams\Platform\Ui\Table\Component\View\ViewCollection;
use Websemantics\CalendarModule\Calendar\Event\Table\Component\View\Type\Calendar;
use Websemantics\CalendarModule\Calendar\Event\Table\Component\View\Type\Table;


/**
 * Class EventTableBuilder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event\Table
 */

class EventTableBuilder extends TableBuilder
{

  /**
   * The table actions.
   *
   * @var array
   */

  protected $actions = [
      'delete'
  ];

  /**
   * The views configuration.
   *
   * @var array|string
   */
  protected $views = [
    'calendar' => [
        'view' => Calendar::class
    ],
    'table' => [
        'view' => Table::class
    ]
  ];

  /**
   * Build the table.
   *
   * @return $this
   */
  public function build()
  {

    $options = $this->table->getOptions();
    $views = new ViewCollection();

    /* create view collection */
    foreach ($this->views as $key => $item) {
      $views->put($key, app($item['view']));
    }

    $current = app('Illuminate\Http\Request')->get($options->get('prefix') . 'view');

    /* select calendar if nothing is provided */
    if ($view = $views->findBySlug($current?:'calendar')) {
      $this->assets = $view->assets;
      $this->options = $view->options;
    }

    return parent::build();
  }

  /**
   * Get the table entries,
   * Filter on partner if the current user role is coordinator
   *
   * @return Collection
   */
  public function getTableEntries()
  {
      $user = $this->dispatch(new GetUser(null));
      $entries = $this->table->getEntries();

      $entries = $entries->filter(function ($value, $key) use ($user) {
        return $value->created_by === $user->id;
      });

      return $entries;
  }

}