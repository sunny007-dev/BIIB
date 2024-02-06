<?php

namespace Modules\Team\Listeners\LeadershipViewed;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\LeadershipViewed;

class IncrementHitCount implements ShouldQueue
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
    public function handle(LeadershipViewed $event)
    {
        $leadership = $event->leadership;

        $leadership->increment('hits');

        $leadership->view_counter += 1;

        Log::debug('Listeners: IncrementHitCount');
    }
}
