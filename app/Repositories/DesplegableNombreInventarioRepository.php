<?php

namespace App\Repositories;

use App\Models\DesplegableNombreInventario;
use App\Repositories\BaseRepository;

/**
 * Class DesplegableNombreInventarioRepository
 * @package App\Repositories
 * @version September 21, 2020, 3:30 am UTC
*/

class DesplegableNombreInventarioRepository extends BaseRepository
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
        return DesplegableNombreInventario::class;
    }
}
