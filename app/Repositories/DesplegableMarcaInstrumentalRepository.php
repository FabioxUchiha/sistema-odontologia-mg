<?php

namespace App\Repositories;

use App\Models\DesplegableMarcaInstrumental;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableMarcaInstrumentalRepository
 * @package App\Repositories
 * @version October 11, 2020, 3:32 am UTC
*/

class DesplegableMarcaInstrumentalRepository extends BaseRepository
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
        return DesplegableMarcaInstrumental::class;
    }
}
