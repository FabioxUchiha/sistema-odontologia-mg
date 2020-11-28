<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ingresos
 * @package App\Models
 * @version September 10, 2020, 2:29 am UTC
 *
 * @property string $fecha
 * @property string $servicio
 * @property string $detalle
 * @property string $tipo
 * @property integer $precio
 */
class Ingresos extends Model
{
    // use SoftDeletes;

    public $table = 'ingresos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha',
        'servicio',
        'detalle',
        'tipo',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'date',
        'servicio' => 'string',
        'detalle' => 'string',
        'tipo' => 'string',
        'precio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'tipo' => 'required',
        'precio' => 'required',
        'servicio' => 'required'
    ];

    public function scopeFecha($query, $fecha){
        if ($fecha) {
            return $query->where('fecha','like',"%$fecha%");
        }
    }

    public function scopeServicio($query, $servicio){
        if ($servicio) {
            return $query->where('servicio','like',"%$servicio%");
        }
    }

    public function scopeTipo($query, $tipo){
        if ($tipo) {
            return $query->where('tipo','like',"%$tipo%");
        }
    }

}
