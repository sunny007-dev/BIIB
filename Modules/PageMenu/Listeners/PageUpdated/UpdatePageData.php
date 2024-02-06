<?php

namespace Modules\PageMenu\Listeners\PageUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\PageMenu\Events\PageUpdated;

class UpdatePageData implements ShouldQueue
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
    public function handle(PageUpdated $event)
    {
        $page = $event->page;

        Log::debug('Listeners: UpdatePageData');
    }
}
