<?php

namespace Modules\Approval\Listeners\CertifiedCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Approval\Events\CertifiedCreated;

class CreateCertifiedData implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CertifiedCreated $event)
    {
        $certified = $event->certified;

        Log::debug('Listeners: CreateCertifiedData');
    }
}
