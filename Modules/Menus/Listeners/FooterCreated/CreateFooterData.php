<?php

namespace Modules\Menus\Listeners\FooterCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Menus\Events\FooterCreated;

class CreateFooterData implements ShouldQueue
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
    public function handle(FooterCreated $event)
    {
        $footer = $event->footer;

        Log::debug('Listeners: CreateFooterData');
    }
}
