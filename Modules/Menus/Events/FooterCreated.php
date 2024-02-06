<?php

namespace Modules\Menus\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Menus\Entities\Footer;;

class FooterCreated
{
    use SerializesModels;

    public $footer;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Footer $footer)
    {
        $this->footer = $footer;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
