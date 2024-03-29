<?php

namespace Modules\Menus\Entities;

use App\Models\BaseModelTitle;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Menus\Entities\Presenters\FooterPresenter;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Footer extends BaseModelTitle
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use FooterPresenter;
    use Notifiable;

    protected $table = 'footer_menu';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName($this->table);
    }

    public function category()
    {
        return $this->belongsTo('Modules\Menus\Entities\FooterCategory');
    }



    public function setCategoryIdAttribute($value)
    {
        $this->attributes['footer_category_id'] = $value;

        try {
            $category = FooterCategory::findOrFail($value);
            $this->attributes['footer_category_name'] = $category->name;
        } catch (\Exception $e) {
            $this->attributes['footer_category_name'] = null;
        }
    }

    public function setCreatedByNameAttribute($value)
    {
        $this->attributes['created_by_name'] = trim(label_case($value));

        if (empty($value)) {
            $this->attributes['created_by_name'] = auth()->user()->name;
        }
    }

    /**
     * Set the 'meta title'.
     * If no value submitted use the 'Title'.
     *
     * @param [type]
     */
    public function setMetaTitleAttribute($value)
    {
        $this->attributes['meta_title'] = trim(ucwords($value));

        if (empty($value)) {
            $this->attributes['meta_title'] = trim(ucwords($this->attributes['title']));
        }
    }

    /**
     * Set the 'meta description'
     * If no value submitted use the default 'meta_description'.
     *
     * @param [type]
     */
    public function setMetaDescriptionAttribute($value)
    {
        $this->attributes['meta_description'] = $value;

        if (empty($value)) {
            $this->attributes['meta_description'] = setting('meta_description');
        }
    }

    /**
     * Set the meta meta_og_image
     * If no value submitted use the 'Title'.
     *
     * @param [type]
     */
    public function setMetaOgImageAttribute($value)
    {
        $this->attributes['meta_og_image'] = $value;

        if (empty($value)) {
            if (isset($this->attributes['featured_image'])) {
                $this->attributes['meta_og_image'] = $this->attributes['featured_image'];
            } else {
                $this->attributes['meta_og_image'] = setting('meta_image');
            }
        }
    }

    

    /**
     * Get the list of Published Pages.
     *
     * @param [type] $query [description]
     * @return [type] [description]
     */
    public function scopePublished($query)
    {
        return $query->where('status', '=', '1')
                        ->where('published_at', '<=', Carbon::now());
    }

    public function scopePublishedAndScheduled($query)
    {
        return $query->where('status', '=', '1');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', '=', 'Yes')
                        ->where('status', '=', '1')
                        ->where('published_at', '<=', Carbon::now());
    }

    /**
     * Get the list of Recently Publishe Pages.
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
