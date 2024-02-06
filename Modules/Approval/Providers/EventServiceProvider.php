<?php

namespace Modules\Approval\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Modules\Approval\Events\CertifiedCreated' => [
            'Modules\Approval\Listeners\CertifiedCreated\CreateCertifiedData',
        ],
        'Modules\Approval\Events\CertifiedUpdated' => [
            'Modules\Approval\Listeners\CertifiedUpdated\UpdateCertifiedData',
        ],
        'Modules\Approval\Events\CertifiedViewed' => [
            'Modules\Approval\Listeners\CertifiedViewed\IncrementHitCount',
        ],
    ];
}
