<?php

namespace Websemantics\CalendarModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
/**
 * Class CalendarModule
 *
 *
 * @package   Websemantics\CalendarModule
 */
class CalendarModule extends Module
{
    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = "fa fa-calendar";
    protected $sections = ['events' => ['href' => 'admin/calendar/events', 'buttons' => ['create']]];
}