<?php

namespace Modules\Menus\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\Menus\Events\FooterCreated' => [
            'Modules\Menus\Listeners\FooterCreated\CreateFooterData',
        ],
        'Modules\Menus\Events\FooterUpdated' => [
            'Modules\Menus\Listeners\FooterUpdated\UpdateFooterData',
        ],
        'Modules\Menus\Events\FooterViewed' => [
            'Modules\Menus\Listeners\FooterViewed\IncrementHitCount',
        ],
    ];
}
