<?php

namespace App\Repositories;

use App\Models\insumos;
use App\Repositories\BaseRepository;

/**
 * Class insumosRepository
 * @package App\Repositories
 * @version September 12, 2020, 2:43 am UTC
*/

class insumosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha_de_compra',
        'cantidad',
        'marca',
        'fecha_de_vencimiento',
        'presentacion'
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
        return insumos::class;
    }
}
