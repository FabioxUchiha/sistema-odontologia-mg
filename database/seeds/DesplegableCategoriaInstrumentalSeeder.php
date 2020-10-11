<?php

use Illuminate\Database\Seeder;

class DesplegableCategoriaInstrumentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//semillas para las categorias
        DesplegableCategoriaInstrumental::create(['nombre' => 'BÁSICO'],);
		DesplegableCategoriaInstrumental::create(['nombre' => 'CIRUGÍA ORAL'],);
		DesplegableCategoriaInstrumental::create(['nombre' => 'PERIODONCIA'],);
		DesplegableCategoriaInstrumental::create(['nombre' => 'OPERATORIA'],);
		DesplegableCategoriaInstrumental::create(['nombre' => 'PROSTODONCIA'],);
		DesplegableCategoriaInstrumental::create(['nombre' => 'ENDODONCIA'],);

    }
}
