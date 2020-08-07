<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class notas
 * @package App\Models
 * @version August 7, 2020, 4:33 pm UTC
 *
 * @property integer $documento
 * @property string $nombre
 * @property int $telefono
 * @property string $procedimiento
 * @property string $observaciones
 */
class notas extends Model
{
    use SoftDeletes;

    public $table = 'notas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'documento',
        'nombre',
        'telefono',
        'procedimiento',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documento' => 'integer',
        'nombre' => 'string',
        'procedimiento' => 'string',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'documento' => 'required',
        'nombre' => 'required'
    ];

    
}
