<?php

namespace Modules\Lecture\Entities\Presenters;

use Carbon\Carbon;

trait LecturePresenter
{
    public function getPublishedAtFormattedAttribute()
    {
        $diff = Carbon::now()->diffInHours($this->published_at);

        if ($diff < 24) {
            return $this->published_at->diffForHumans();
        } else {
            return $this->published_at->isoFormat('llll');
        }
    }

   
    public function getStatusFormattedAttribute()
    {
        switch ($this->status) {
            case '0':
                return '<span class="badge bg-warning text-dark">Pending</span>';
                break;

            case '1':
                return '<span class="badge bg-success">Published</span>';
                break;

            case '2':
                return '<span class="badge bg-danger">Rejected</span>';
                break;

            default:
                return '<span class="badge bg-primary">Status:'.$this->status.'</span>';
                break;
        }
    }
}
