<?php

namespace Modules\Team\Listeners\LeadershipUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\LeadershipUpdated;

class UpdateLeadershipData implements ShouldQueue
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
    public function handle(LeadershipUpdated $event)
    {
        $leadership = $event->leadership;

        Log::debug('Listeners: UpdateLeadershipData');
    }
}
