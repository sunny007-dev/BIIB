<?php

namespace Modules\Recruitment\Listeners\PlacementCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Recruitment\Events\PlacementCreated;

class CreatePlacementData implements ShouldQueue
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
    public function handle(PlacementCreated $event)
    {
        $placement = $event->placement;

        Log::debug('Listeners: CreatePlacementData');
    }
}
