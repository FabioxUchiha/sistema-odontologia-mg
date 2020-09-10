<?php

namespace App\Repositories;

use App\Models\Inventario;
use App\Repositories\BaseRepository;

/**
 * Class InventarioRepository
 * @package App\Repositories
 * @version September 10, 2020, 1:59 am UTC
*/

class InventarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'categoria',
        'marca',
        'cantidad',
        'unidad_medica'
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
        return Inventario::class;
    }
}
