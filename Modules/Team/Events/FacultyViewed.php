<?php

namespace Modules\Team\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Team\Entities\Faculty;

class FacultyViewed
{
    use SerializesModels;

    public $faculty;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Faculty $faculty)
    {
        $this->faculty = $faculty;
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
