<?php

namespace Modules\Approval\Listeners\CertifiedUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Approval\Events\CertifiedUpdated;

class UpdateCertifiedData implements ShouldQueue
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
    public function handle(CertifiedUpdated $event)
    {
        $certified = $event->certified;

        Log::debug('Listeners: UpdateCertifiedData');
    }
}
