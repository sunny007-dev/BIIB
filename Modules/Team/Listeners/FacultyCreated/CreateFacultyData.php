<?php

namespace Modules\Team\Listeners\FacultyCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Team\Events\FacultyCreated;

class CreateFacultyData implements ShouldQueue
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
    public function handle(FacultyCreated $event)
    {
        $faculty = $event->faculty;

        Log::debug('Listeners: CreateFacultyData');
    }
}
