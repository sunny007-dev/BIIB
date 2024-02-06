<?php

namespace Modules\Team\Listeners\PostViewed;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\FacultyViewed;

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
    public function handle(FacultyViewed $event)
    {
        $faculty = $event->faculty;

        $faculty->increment('hits');

        $faculty->view_counter += 1;

        Log::debug('Listeners: IncrementHitCount');
    }
}
