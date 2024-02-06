<?php

namespace Modules\PageMenu\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class PageCategory extends BaseModel
{
   
    use SoftDeletes;

    protected $table = 'pages_categories';

    /**
     * Caegories has Many posts.
     */
    public function pages()
    {
        return $this->hasMany('Modules\PageMenu\Entities\Page','pages_category_id');
    }

   
}
