<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleCalendarCreateEventsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
				'slug'                        => 'events',
				'title_column'                => 'title'
		];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
				'title'                         ,
				'start'                         ,
				'end'                           
		];

}
