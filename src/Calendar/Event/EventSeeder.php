<?php namespace Websemantics\CalendarModule\Calendar\Event;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class EventSeeder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event
 */

class EventSeeder extends Seeder
{

    /**
     * The $events seeder data
     *
     * @var array
     */
    protected $data = [
        
    ];

    /**
     * The $events repository.
     *
     * @var EventRepository
     */
    protected $events;

    /**
     * Create a new EventSeeder instance.
     *
     * @param EventRepository $events
     */
    public function __construct(EventRepository $events)
    {
        $this->events = $events;
    }

    /**
     * Seed the $events.
     */
    public function run()
    {
        $this->events->truncate();

       foreach ($this->data as $item){
            $this->events->create($item);
       }
    }
}
