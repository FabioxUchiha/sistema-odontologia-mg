<?php

namespace App\Repositories;

use App\Models\DesplegableServicioIngreso;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableServicioIngresoRepository
 * @package App\Repositories
 * @version October 9, 2020, 9:40 pm UTC
*/

class DesplegableServicioIngresoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return DesplegableServicioIngreso::class;
    }
}
