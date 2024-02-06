<?php

namespace Modules\Team\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Team\Entities\Leadership;

class LeadershipCreated
{
    use SerializesModels;

    public $leadership;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Leadership $leadership)
    {
        $this->leadership = $leadership;
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
