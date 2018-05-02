<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clothes
 * @package App\Models
 * @version May 2, 2018, 5:19 am UTC
 *
 * @property string name
 * @property string image
 */
class Clothes extends Model
{
    use SoftDeletes;

    public $table = 'clothes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
