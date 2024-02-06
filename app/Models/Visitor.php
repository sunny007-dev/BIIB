<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = FALSE;
    protected $table = "visitors";
    protected $fillable = [
        'date',
        'ip'
    ];

     /**
     * The attributes that should be cast.
     *
     * @var array
     */

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];
}
