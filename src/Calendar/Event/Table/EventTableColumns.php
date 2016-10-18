<?php namespace Websemantics\CalendarModule\Calendar\Event\Table;

use Websemantics\CalendarModule\Calendar\Event\EventModel;

/**
 * Class EventTableColumns
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event\Table
 */

class EventTableColumns
{

    /**
     * Handle the columns.
     *
     * @param EventTableBuilder $builder
     */
    public function handle(EventTableBuilder $builder)
    {
        $builder->setColumns([
				'title',
				'start',
				'end',]);
    }
}
