<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DesplegableNombreInsumos
 * @package App\Models
 * @version October 15, 2020, 1:40 am UTC
 *
 * @property string $nombre
 */
class DesplegableNombreInsumos extends Model
{
    use SoftDeletes;

    public $table = 'desplegable_nombre_insumos';
    

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
