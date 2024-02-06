<?php

namespace Modules\Menus\Listeners\FooterViewed;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Menus\Events\FooterViewed;

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
    public function handle(FooterViewed $event)
    {
        $footer = $event->footer;

        $footer->increment('hits');

        $footer->view_counter += 1;

        Log::debug('Listeners: IncrementHitCount');
    }
}
