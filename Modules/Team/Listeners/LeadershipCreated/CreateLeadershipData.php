<?php

namespace Modules\Team\Listeners\LeadershipCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\LeadershipCreated;

class CreateLeadershipData implements ShouldQueue
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
    public function handle(LeadershipCreated $event)
    {
        $leadership = $event->leadership;

        Log::debug('Listeners: CreateLeadershipData');
    }
}
