<?php

use App\Models\DesplegablePresentacionInsumos;
use Illuminate\Database\Seeder;

class DesplegablePresentacionInsumosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // semillas o seeder para las presentaciones de los insumos
        DesplegablePresentacionInsumos::create(['nombre' => 'AMPOLLAS'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'CAPSULA'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'CREMA'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'GEL'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'GOTAS'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'INYECCIONES (POLVO Y LIQUIDO)'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'JARABE'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'PÍLDORA'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'POLVOS'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'SUPOSITORIO'],);
        DesplegablePresentacionInsumos::create(['nombre' => 'TABLETA O COMPRIMIDO'],);
    }
}
