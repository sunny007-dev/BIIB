<?php

namespace Modules\Team\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fcategory extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'faculty_categories';

    /**
     * Caegories has Many posts.
     */
    public function faculty()
    {
        return $this->hasMany('Modules\Team\Entities\Faculty','faculty_category_id');
    }

    /**
     * Set the published at
     * If no value submitted use the 'Title'.
     *
     * @param [type]
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value;

        if (empty($value) && $this->attributes['status'] == 1) {
            $this->attributes['published_at'] = Carbon::now();
        }
    }

    
}
