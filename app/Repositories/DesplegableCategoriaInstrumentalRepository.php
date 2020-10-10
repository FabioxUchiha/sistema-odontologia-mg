<?php

namespace App\Repositories;

use App\Models\DesplegableCategoriaInstrumental;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableCategoriaInstrumentalRepository
 * @package App\Repositories
 * @version October 10, 2020, 9:25 pm UTC
*/

class DesplegableCategoriaInstrumentalRepository extends BaseRepository
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
        return DesplegableCategoriaInstrumental::class;
    }
}
