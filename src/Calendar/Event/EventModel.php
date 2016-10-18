<?php namespace Websemantics\CalendarModule\Calendar\Event;

use Websemantics\CalendarModule\Calendar\Event\Contract\EventInterface;
use Anomaly\Streams\Platform\Model\Calendar\CalendarEventsEntryModel;

/**
 * Class EventModel
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event
 */

class EventModel extends CalendarEventsEntryModel implements EventInterface
{
    /**
     * Disable timestamps for this model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The number of minutes to cache query results.
     *
     * @var null|false|int
     */
    protected $ttl = false;

    /**
     * The attributes that are
     * not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Runtime cache.
     *
     * @var array
     */
    protected $cache = [];

}
