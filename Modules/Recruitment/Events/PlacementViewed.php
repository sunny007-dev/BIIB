<?php

namespace Modules\Recruitment\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Recruitment\Entities\Placement;

class PlacementViewed
{
    use SerializesModels;

    public $placement;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Placement $placement)
    {
        $this->placement = $placement;
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
