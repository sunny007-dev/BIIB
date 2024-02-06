<?php

namespace Modules\Recruitment\Listeners\InternshipCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Recruitment\Events\InternshipCreated;

class CreateInternshipData implements ShouldQueue
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
    public function handle(InternshipCreated $event)
    {
        $internship = $event->internship;

        Log::debug('Listeners: CreateInternshipData');
    }
}
