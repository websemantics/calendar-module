<?php namespace Websemantics\CalendarModule\Calendar\Event;

use Websemantics\CalendarModule\Calendar\Event\Contract\EventRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class EventRepository
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Calendar\Event
 */

class EventRepository extends EntryRepository implements EventRepositoryInterface
{
    /**
     * The event model.
     *
     * @var EventModel
     */
    protected $model;

    /**
     * Create a new EventRepository instance.
     *
     * @param EventModel $model
     */
    public function __construct(EventModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a model by id or list of attributes
     *
     * @param int / array $attributes, value of record (id) or list of (attributes)
     */
    public function find($attributes)
    {
        if(is_array($attributes)){
            return $this->model->where($attributes)->first();
        }

        return parent::find(/* $id */ $attributes);
    }

    /**
     * Find a model by a specific field
     *
     * @param string $field, the field to find by
     * @param string / int, $value, value of that field
     * @param string $operation, the relational operation
     */
    public function findBy($field, $value, $operation = '=')
    {
        return $this->model->where($field, $operation, $value)->first();
    }

    /**
     * Find a model by a list of attributes, if not found, attept to create one
     *
     * @param array $attributes, list of attributes values
     */
    public function findOrNew(array $attributes)
    {
        if(is_null($model = $this->find($attributes))){
            return $this->create($attributes);
        }

        return $model;
    }
}
