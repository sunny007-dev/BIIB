<?php

namespace Modules\Team\Listeners\FacultyUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\FacultyUpdated;

class UpdateFacultyData implements ShouldQueue
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
    public function handle(FacultyUpdated $event)
    {
        $faculty = $event->faculty;

        Log::debug('Listeners: UpdateFacultyData');
    }
}
