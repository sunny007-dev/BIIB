<?php

namespace Modules\Approval\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Approval\Entities\Certified;

class CertifiedUpdated
{
    use SerializesModels;

    public $certified;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Certified $certified)
    {
        $this->certified = $certified;
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
