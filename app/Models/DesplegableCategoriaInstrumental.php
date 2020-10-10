<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DesplegableCategoriaInstrumental
 * @package App\Models
 * @version October 10, 2020, 9:25 pm UTC
 *
 * @property string $nombre
 */
class DesplegableCategoriaInstrumental extends Model
{
    use SoftDeletes;

    public $table = 'desplegable_categoria_instrumentals';
    

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
