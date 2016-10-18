<?php namespace Websemantics\CalendarModule\Calendar\Event\Table\Component\View\Type;

use Anomaly\Streams\Platform\Ui\Table\Component\View\Query\AllQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\View\View;

/**
 * Class Calendar View
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\CalendarModule\Calendar\Event\Table
 */

class Calendar extends View
{

  /**
   * The view slug.
   *
   * @var null|string
   */
  protected $slug = 'calendar';

  /**
   * The view text.
   *
   * @var null|string
   */
  protected $text = 'websemantics.module.calendar::view.calendar';

  /**
   * The view icon.
   *
   * @var null|string
   */
  protected $icon = 'fa fa-calendar';

  /**
   * The view columns.
   *
   * @var null
   */
  protected $columns = [
        'event' => [
          'wrapper' => '{entry.start} - {entry.end}'
        ],
        'start',
        'end'
    ];

  /**
   * The calendar buttons.
   *
  * @var array
   */

  protected $buttons = [
        'edit' => [
          'text' => ''
        ]
  ];

  /**
   * The calendar assets.
   *
   * @var array
   */

  public $assets = [
      'styles.css' => [
          'websemantics.module.calendar::less/calendar.less',
      ]
  ];

  /**
   * The calendar options.
   *
   * @var array
   */

  public $options = [
    'limit' => 200,
    'class' => 'calendar'
  ];

  /**
   * The view query.
   *
   * @var string
   */
  protected $query = AllQuery::class;

}
