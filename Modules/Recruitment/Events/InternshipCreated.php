<?php

namespace Modules\Recruitment\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Recruitment\Entities\Internship;

class InternshipCreated
{
    use SerializesModels;

    public $internship;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Internship $internship)
    {
        $this->internship = $internship;
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
