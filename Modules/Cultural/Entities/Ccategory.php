<?php

namespace Modules\Cultural\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ccategory extends BaseModel
{
   
    use SoftDeletes;

    protected $table = 'cultural_categories';

    /**
     * Categories has Many culture.
     */
    public function culture()
    {
        return $this->hasMany('Modules\Cultural\Entities\Cultural','cultural_category_id');
    }

   
}
