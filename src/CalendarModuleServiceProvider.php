<?php

namespace Websemantics\CalendarModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
/**
 * Class CalendarModuleServiceProvider
 *
 *
 * @package   Websemantics\CalendarModule
 */
class CalendarModuleServiceProvider extends AddonServiceProvider
{
    protected $routes = ['admin/calendar' => 'Websemantics\CalendarModule\Http\Controller\Admin\EventsController@index', 'admin/calendar/events' => 'Websemantics\CalendarModule\Http\Controller\Admin\EventsController@index', 'admin/calendar/events/create' => 'Websemantics\CalendarModule\Http\Controller\Admin\EventsController@create', 'admin/calendar/events/edit/{id}' => 'Websemantics\CalendarModule\Http\Controller\Admin\EventsController@edit'];
    protected $bindings = ['Websemantics\CalendarModule\Calendar\Event\EventModel' => 'Websemantics\CalendarModule\Calendar\Event\EventModel'];
    protected $singletons = ['Websemantics\CalendarModule\Calendar\Event\Contract\EventRepositoryInterface' => 'Websemantics\CalendarModule\Calendar\Event\EventRepository'];

    /* 
     * Get the addon view overrides.
     *
     * @return array
     */
    public function getOverrides()
    {
      $request = app('Illuminate\Http\Request');
      $view = $request->get('view');

      if ($request->segment(2) === $this->addon->getSlug() &&
          $view !== 'table') {
        return [
          'streams::table/partials/header' => 'websemantics.module.calendar::admin/table/partials/header',
          'streams::table/partials/body' => 'websemantics.module.calendar::admin/table/partials/body'
        ];
      }

      return parent::getOverrides();
    }
}


