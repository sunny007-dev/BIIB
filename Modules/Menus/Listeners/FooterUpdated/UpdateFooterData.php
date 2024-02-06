<?php

namespace Modules\Menus\Listeners\FooterUpdated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Menus\Events\FooterUpdated;

class UpdateFooterData implements ShouldQueue
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
    public function handle(FooterUpdated $event)
    {
        $footer = $event->footer;

        Log::debug('Listeners: UpdateFooterData');
    }
}
