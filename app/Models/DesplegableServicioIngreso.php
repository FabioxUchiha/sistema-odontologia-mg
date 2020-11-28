<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DesplegableServicioIngreso
 * @package App\Models
 * @version October 9, 2020, 9:40 pm UTC
 *
 * @property string $nombre
 */
class DesplegableServicioIngreso extends Model
{
    // use SoftDeletes;

    public $table = 'desplegable_servicio_ingresos';


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
