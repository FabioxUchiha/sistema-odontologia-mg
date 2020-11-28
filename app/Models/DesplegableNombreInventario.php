<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DesplegableNombreInventario
 * @package App\Models
 * @version September 21, 2020, 3:30 am UTC
 *
 * @property string $nombre
 */
class DesplegableNombreInventario extends Model
{
    // use SoftDeletes;

    public $table = 'desplegable_nombre_inventarios';


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
