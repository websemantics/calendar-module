<?php namespace Websemantics\CalendarModule\Calendar\Event\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

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
   * The table views.
   *
  * @var array
   */
  protected $views = [];

  /**
   * The table filters.
   *
  * @var array
   */
  protected $filters = [];

  /**
   * The table columns.
   *
  * @var array
   */
  protected $columns = [];

  /**
   * The table buttons.
   *
  * @var array
   */
  protected $buttons = [
      'edit'
  ];

  /**
   * The table actions.
   *
  * @var array
   */
  protected $actions = [
      'delete'
  ];

  /**
   * The table options.
   *
   * @var array
   */
  protected $options = [];

  /**
   * The table assets.
   *
   * @var array
   */
  protected $assets = [];

}
