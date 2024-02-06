<?php

namespace Modules\PageMenu\Listeners\PageViewed;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\PageMenu\Events\PageViewed;

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
    public function handle(PageViewed $event)
    {
        $page = $event->page;

        $page->increment('hits');

        $page->view_counter += 1;

        Log::debug('Listeners: IncrementHitCount');
    }
}
