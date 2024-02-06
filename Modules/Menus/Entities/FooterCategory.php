<?php

namespace Modules\Menus\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class FooterCategory extends BaseModel
{
   
    use SoftDeletes;

    protected $table = 'footer_categories';

    /**
     * Caegories has Many posts.
     */
    public function footer()
    {
        return $this->hasMany('Modules\Menus\Entities\Footer');
    }

   
}
