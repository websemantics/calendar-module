<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleCalendarCreateCalendarEventsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
				'title'                       => 'anomaly.field_type.text',
				'start'                       => 'anomaly.field_type.datetime',
				'end'                         => 'anomaly.field_type.datetime',
		];

}
