<?php

namespace Modules\Recruitment\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\Recruitment\Events\PlacementCreated' => [
            'Modules\Recruitment\Listeners\PlacementCreated\CreatePlacementData',
        ],
        'Modules\Recruitment\Events\PlacementUpdated' => [
            'Modules\Recruitment\Listeners\PlacementUpdated\UpdatePlacementData',
        ],
        'Modules\Recruitment\Events\InternshipCreated' => [
            'Modules\Recruitment\Listeners\InternshipCreated\CreateInternshipData',
        ],
        'Modules\Recruitment\Events\InternshipUpdated' => [
            'Modules\Recruitment\Listeners\InternshipUpdated\UpdateInternshipData',
        ],
       
    ];
}
