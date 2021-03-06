<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DesplegableMarcaInstrumental
 * @package App\Models
 * @version October 11, 2020, 3:32 am UTC
 *
 * @property string $nombre
 */
class DesplegableMarcaInstrumental extends Model
{
    // use SoftDeletes;

    public $table = 'desplegable_marca_instrumentals';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];


}
