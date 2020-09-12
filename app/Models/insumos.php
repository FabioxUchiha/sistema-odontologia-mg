<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class insumos
 * @package App\Models
 * @version September 12, 2020, 2:43 am UTC
 *
 * @property string $nombre
 * @property string $fecha_de_compra
 * @property integer $cantidad
 * @property string $marca
 * @property string $fecha_de_vencimiento
 * @property string $presentacion
 */
class insumos extends Model
{
    use SoftDeletes;

    public $table = 'insumos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'fecha_de_compra',
        'cantidad',
        'marca',
        'fecha_de_vencimiento',
        'presentacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'fecha_de_compra' => 'date',
        'cantidad' => 'integer',
        'marca' => 'string',
        'fecha_de_vencimiento' => 'date',
        'presentacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'fecha_de_compra' => 'required',
        'cantidad' => 'required',
        'fecha_de_vencimiento' => 'required'
    ];

    
}
