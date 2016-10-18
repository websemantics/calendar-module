<?php namespace Websemantics\TimetableModule\Timetable\Timetable\Table\Component\View\Type;

use Anomaly\Streams\Platform\Ui\Table\Component\View\Query\AllQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\View\View;

/**
 * Class Table View
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\TimetableModule\Timetable\Timetable\Table
 */

class Table extends View
{

  /**
   * The view slug.
   *
   * @var null|string
   */
  protected $slug = 'table';

  /**
   * The view text.
   *
   * @var null|string
   */
  protected $text = 'websemantics.module.calendar::view.table';

  /**
   * The view icon.
   *
   * @var null|string
   */
  protected $icon = 'fa fa-list-ul';

  /**
   * The view columns.
   *
   * @var null
   */
  protected $columns = [
        'start' => [
          'wrapper' => '<h4><span class="label label-default">{entry.start}</span></h4>'
        ],
        'end' => [
          'wrapper' => '<h4><span class="label label-default">{entry.end}</span></h4>'
        ],
    ];

  /**
   * The grid buttons.
   *
  * @var array
   */

   protected $buttons = [
       'edit'
   ];

  /**
   * The grid assets.
   *
   * @var array
   */

   public $assets = [];

  /**
   * The grid options.
   *
   * @var array
   */

  public $options = [];

  /**
   * The view query.
   *
   * @var string
   */
  protected $query = AllQuery::class;

}
