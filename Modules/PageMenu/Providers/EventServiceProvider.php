<?php

namespace Modules\PageMenu\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\PageMenu\Events\PageCreated' => [
            'Modules\PageMenu\Listeners\PageCreated\CreatePageData',
        ],
        'Modules\PageMenu\Events\PageUpdated' => [
            'Modules\PageMenu\Listeners\PageUpdated\UpdatePageData',
        ],
        'Modules\PageMenu\Events\PageViewed' => [
            'Modules\PageMenu\Listeners\PageViewed\IncrementHitCount',
        ],
    ];
}
