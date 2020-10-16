<?php

use App\Models\DesplegableMarcaInsumos;
use Illuminate\Database\Seeder;

class DesplegableMarcaInsumosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder de marcas de insumos
        DesplegableMarcaInsumos::create(['nombre' => 'DEPÓSITO DENTAL MARÍA HELENA '],);
		DesplegableMarcaInsumos::create(['nombre' => 'INSUDENTAL S.A.S. '],);
		DesplegableMarcaInsumos::create(['nombre' => 'DENTAL LA 75 DOR '],);
		DesplegableMarcaInsumos::create(['nombre' => 'LABORATORIO DENTAL NÉSTOR VANEGAS'],);
		DesplegableMarcaInsumos::create(['nombre' => 'LABORATORIO Y CONSULTORIO DENTAL SILCA '],);
		DesplegableMarcaInsumos::create(['nombre' => 'DEPÓSITO Y LABORATORIO DENTAL DANI '],);
		DesplegableMarcaInsumos::create(['nombre' => 'DEPÓSITO Y LABORATORIO DENTAL RODRÍGUEZ '],);
		DesplegableMarcaInsumos::create(['nombre' => 'A E M C CONSTRUCCIONES Y CONSULTORÍA SAS '],);
		DesplegableMarcaInsumos::create(['nombre' => 'AIR SERVICE SOLUTION S.A.S. '],);
		DesplegableMarcaInsumos::create(['nombre' => 'ALLERS S.A. '],);
		DesplegableMarcaInsumos::create(['nombre' => 'ALMACÉN DENTAL RESTREPO '],);
		DesplegableMarcaInsumos::create(['nombre' => 'AVG COLOMBIA LTDA '],);
		DesplegableMarcaInsumos::create(['nombre' => 'AURA COLOMBIA SAS '],);
		DesplegableMarcaInsumos::create(['nombre' => 'CASA DENTAL EDUARDO DAZA LTDA. '],);
		DesplegableMarcaInsumos::create(['nombre' => 'DENTALES PADILLA'],);
    }
}
