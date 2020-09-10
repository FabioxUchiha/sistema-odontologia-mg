<?php

namespace App\Repositories;

use App\Models\Ingresos;
use App\Repositories\BaseRepository;

/**
 * Class IngresosRepository
 * @package App\Repositories
 * @version September 10, 2020, 2:29 am UTC
*/

class IngresosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'servicio',
        'detalle',
        'tipo',
        'precio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ingresos::class;
    }
}
