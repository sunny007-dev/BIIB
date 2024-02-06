<?php

namespace Modules\Approval\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class CertifiedType extends BaseModel
{
   
    use SoftDeletes;

    protected $table = 'certified_type';

    /**
     * Caegories has Many posts.
     */
    public function certified()
    {
        return $this->hasMany('Modules\Approval\Entities\Certified');
    }

   
}
