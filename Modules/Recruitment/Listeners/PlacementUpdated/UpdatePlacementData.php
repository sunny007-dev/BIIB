<?php

namespace Modules\Recruitment\Listeners\PlacementUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Recruitment\Events\PlacementUpdated;

class UpdatePlacementData implements ShouldQueue
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
    public function handle(PlacementUpdated $event)
    {
        $placement = $event->placement;

        Log::debug('Listeners: UpdatePlacementData');
    }
}
