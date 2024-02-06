<?php

namespace Modules\Student\Entities;

use App\Models\BaseModelTitle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Student\Entities\Presenters\StudentPresenter;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Student extends BaseModelTitle
{
    use LogsActivity;
    use StudentPresenter;
    use SoftDeletes;

    protected $table = 'students';

    protected $dates = [
        'deleted_at',
        'published_at',
        'moderated_at',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    /**
     * Get the owning commentable model.
     */
    // public function commentable()
    // {
    //     return $this->morphTo();
    // }

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    // public function getPostAttribute()
    // {
    //     if ($this->commentable_type == 'Modules\Article\Entities\Post') {
    //         return $this->commentable;
    //     } else {
    //         return [];
    //     }
    // }

    // public function getModuleNameAttribute()
    // {
    //     if ($this->commentable_type == 'Modules\Article\Entities\Post') {
    //         return 'posts';
    //     } else {
    //         return '';
    //     }
    // }

    // public function parent()
    // {
    //     return $this->belongsTo('Modules\Slider\Entities\Slider', 'parent_id');
    // }

    // /**
    //  * Purifiy Slider field value.
    //  */
    // public function setCommentAttribute($value)
    // {
    //     $this->attributes['comment'] = clean($value);
    // }

    // public function setUserIdAttribute($value)
    // {
    //     $this->attributes['user_id'] = $value;

    //     if ($value) {
    //         $this->attributes['user_name'] = User::findOrFail($value)->name;
    //     }
    // }

   

    /**
     * Get the list of Published Articles.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopePublished($query)
    {
        return $query->where('status', '=', '1')
                        ->whereDate('published_at', '<=', Carbon::today()
                        ->toDateString());
    }

    /**
     * Get the list of Recently Published Articles.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopeRecentlyPublished($query)
    {
        return $query->where('status', '=', '1')
                        ->whereDate('published_at', '<=', Carbon::today()->toDateString())
                        ->orderBy('published_at', 'desc');
    }

    
}
