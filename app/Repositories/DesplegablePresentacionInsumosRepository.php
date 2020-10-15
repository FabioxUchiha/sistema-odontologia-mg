<?php

namespace App\Repositories;

use App\Models\DesplegablePresentacionInsumos;
use App\Repositories\BaseRepository;

/**
 * Class DesplegablePresentacionInsumosRepository
 * @package App\Repositories
 * @version October 15, 2020, 1:42 am UTC
*/

class DesplegablePresentacionInsumosRepository extends BaseRepository
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
        return DesplegablePresentacionInsumos::class;
    }
}
