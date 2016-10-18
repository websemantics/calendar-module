<?php namespace Websemantics\CalendarModule\Http\Controller\Admin;

use Websemantics\CalendarModule\Calendar\Event\Form\EventFormBuilder;
use Websemantics\CalendarModule\Calendar\Event\Table\EventTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Routing\Redirector;

/**
 * Class EventController
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\CalendarModule\Http\Controller\Admin
 */

class EventsController extends AdminController
{

    /**
     * Redirect to events.
     *
     * @param Redirector $redirector
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Redirector $redirector)
    {
        return $redirector->to('admin/calendar/events');
    }

    /**
     * Return an index of existing entries.
     *
     * @param EventTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(EventTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param EventFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(EventFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param EventFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(EventFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
