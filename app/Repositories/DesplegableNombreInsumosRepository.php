<?php

namespace App\Repositories;

use App\Models\DesplegableNombreInsumos;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableNombreInsumosRepository
 * @package App\Repositories
 * @version October 15, 2020, 1:40 am UTC
*/

class DesplegableNombreInsumosRepository extends BaseRepository
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
        return DesplegableNombreInsumos::class;
    }
}
