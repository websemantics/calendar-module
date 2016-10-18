<?php namespace Websemantics\CalendarModule\Calendar\Event\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface EventRepositoryInterface
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event\Contract
 */

interface EventRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Truncate event.
     *
     * @return static
     */
    public function truncate();

    /**
     * Create a new event.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

}
