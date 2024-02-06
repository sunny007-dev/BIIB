<?php

namespace Modules\Recruitment\Listeners\InternshipUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Recruitment\Events\InternshipUpdated;

class UpdateInternshipData implements ShouldQueue
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
    public function handle(InternshipUpdated $event)
    {
        $internship = $event->internship;

        Log::debug('Listeners: UpdateInternshipData');
    }
}
