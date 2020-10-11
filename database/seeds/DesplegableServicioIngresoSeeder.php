<?php

use App\Models\DesplegableServicioIngreso;
use Illuminate\Database\Seeder;

class DesplegableServicioIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//semillas para los servicios
		DesplegableServicioIngreso::create(['nombre' => 'EXODONCIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'CONTROL ORTODONCIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'ENDODONCIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'TRATAMIENTO DE CONDUCTOS'],);
		DesplegableServicioIngreso::create(['nombre' => 'PERIODONCIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'PRÓTESIS DENTAL'],);
		DesplegableServicioIngreso::create(['nombre' => 'PROSTODONCIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'OPERATORIA'],);
		DesplegableServicioIngreso::create(['nombre' => 'SERVICIOS PÚBLICOS'],);
		DesplegableServicioIngreso::create(['nombre' => 'OTROS'],);
		DesplegableServicioIngreso::create(['nombre' => 'DISPOSITIVOS MÉDICOS O MEDICAMENTOSOS'],);
    }
}
