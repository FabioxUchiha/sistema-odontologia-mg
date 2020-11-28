<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inventario
 * @package App\Models
 * @version September 10, 2020, 1:59 am UTC
 *
 * @property string $nombre
 * @property string $categoria
 * @property string $marca
 * @property integer $cantidad
 * @property string $estado_instrumental
 */
class Inventario extends Model
{
    // use SoftDeletes;

    public $table = 'inventarios';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'categoria',
        'marca',
        'cantidad',
        'estado_instrumental',
        'lote'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'categoria' => 'string',
        'marca' => 'string',
        'cantidad' => 'integer',
        'estado_instrumental' => 'string',
        'lote' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'marca' => 'required',
        'cantidad' => 'required'
    ];

    public function scopeNombre($query, $nombre){
        if ($nombre) {
            return $query->where('nombre','like',"%$nombre%");
        }
    }

    public function scopeCategoria($query, $categoria){
        if ($categoria) {
            return $query->where('categoria','like',"%$categoria%");
        }
    }

    public function scopeMarca($query, $marca){
        if ($marca) {
            return $query->where('marca','like',"%$marca%");
        }
    }

}
