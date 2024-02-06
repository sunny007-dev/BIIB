<?php

namespace Modules\Recruitment\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Recruitment\Entities\Presenters\RecruiterPresenter;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Recruiter extends BaseModel
{
   
    use SoftDeletes;
    use RecruiterPresenter;

    protected $table = 'recruiters';

    /**
     * Recruiters has Many placement.
     */
    public function placement()
    {
        return $this->hasMany('Modules\Recruitment\Entities\Placement');
    }

     /**
     * Recruiters has Many internship.
     */
    public function internship()
    {
        return $this->hasMany('Modules\Recruitment\Entities\Internship');
    }


  
}
