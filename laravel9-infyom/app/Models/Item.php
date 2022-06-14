<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Item
 * @package App\Models
 * @version June 14, 2022, 6:24 am UTC
 *
 * @property boolean $checked
 * @property string|\Carbon\Carbon $checked_at
 * @property number $amount
 * @property integer $number
 * @property string $title
 * @property string $notes
 */
class Item extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'checked',
        'checked_at',
        'amount',
        'number',
        'title',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'checked' => 'boolean',
        'checked_at' => 'datetime',
        'amount' => 'decimal:2',
        'number' => 'integer',
        'title' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'checked' => 'required|boolean',
        'checked_at' => 'nullable',
        'amount' => 'required|numeric',
        'number' => 'required|integer',
        'title' => 'required|string',
        'notes' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
