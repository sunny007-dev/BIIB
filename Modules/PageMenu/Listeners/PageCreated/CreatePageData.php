<?php

namespace Modules\PageMenu\Listeners\PageCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\PageMenu\Events\PageCreated;

class CreatePageData implements ShouldQueue
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
    public function handle(PageCreated $event)
    {
        $page = $event->page;

        Log::debug('Listeners: CreatePageData');
    }
}
