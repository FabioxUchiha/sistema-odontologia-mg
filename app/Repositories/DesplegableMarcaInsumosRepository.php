<?php

namespace App\Repositories;

use App\Models\DesplegableMarcaInsumos;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableMarcaInsumosRepository
 * @package App\Repositories
 * @version October 15, 2020, 1:41 am UTC
*/

class DesplegableMarcaInsumosRepository extends BaseRepository
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
        return DesplegableMarcaInsumos::class;
    }
}
