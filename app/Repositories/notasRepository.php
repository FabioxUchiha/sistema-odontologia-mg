<?php

namespace App\Repositories;

use App\Models\notas;
use App\Repositories\BaseRepository;

/**
 * Class notasRepository
 * @package App\Repositories
 * @version August 7, 2020, 4:33 pm UTC
*/

class notasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'documento',
        'nombre',
        'telefono',
        'procedimiento',
        'observaciones'
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
        return notas::class;
    }
}
