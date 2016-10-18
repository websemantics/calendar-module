<?php

namespace Websemantics\CalendarModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
/**
 * Class CalendarModuleSeeder
 *
 *
 * @package   Websemantics\CalendarModule
 */
class CalendarModuleSeeder extends Seeder
{
    protected $seeders = ['Event' => 'Websemantics\CalendarModule\Calendar\Event\EventSeeder'];
    /**
     * Seed the localization module.
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}