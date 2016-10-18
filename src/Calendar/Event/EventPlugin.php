<?php namespace Websemantics\CalendarModule\Calendar\Event;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class EventPlugin
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event
 */

class EventPlugin extends Plugin
{

    /**
     * The event repository.
     *
     * @var EventRepository
     */
    protected $events;

    /**
     * Create a new EventPlugin instance.
     *
     * @param EventRepository $events
     */
    public function __construct(EventRepository $events)
    {
        $this->events = $events;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {

    }
}
