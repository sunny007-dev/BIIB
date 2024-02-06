<?php

namespace Modules\Team\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\Team\Events\LeadershipCreated' => [
            'Modules\Team\Listeners\LeadershipCreated\CreateLeadershipData',
        ],
        'Modules\Team\Events\LeadershipUpdated' => [
            'Modules\Team\Listeners\LeadershipUpdated\UpdateLeadershipData',
        ],
        'Modules\Team\Events\LeadershipViewed' => [
            'Modules\Team\Listeners\LeadershipViewed\IncrementHitCount',
        ],
        'Modules\Team\Events\FacultyCreated' => [
            'Modules\Team\Listeners\FacultyCreated\CreateFacultyData',
        ],
        'Modules\Team\Events\FacultyUpdated' => [
            'Modules\Team\Listeners\FacultyUpdated\UpdateFacultyData',
        ],
        'Modules\Team\Events\FacultyViewed' => [
            'Modules\Team\Listeners\FacultyViewed\IncrementHitCount',
        ],
    ];
}
