<?php

use App\Models\DesplegableNombreInventario;
use Illuminate\Database\Seeder;

class DesplegableNombreInventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//semillas para instrumental
		DesplegableNombreInventario::create(['nombre' => 'FRESAS DE PIEZA DE MANO'],);
		DesplegableNombreInventario::create(['nombre' => 'FRESAS DE CONTRANGULO'],);
		DesplegableNombreInventario::create(['nombre' => 'EXPLORADOR'],);
		DesplegableNombreInventario::create(['nombre' => 'ESPEJO'],);
		DesplegableNombreInventario::create(['nombre' => 'ODONTOSCOPIO'],);
		DesplegableNombreInventario::create(['nombre' => 'CUCHARILLA'],);
		DesplegableNombreInventario::create(['nombre' => 'SONDA PERIODONTAL CAROLINA DEL NORTE'],);
		DesplegableNombreInventario::create(['nombre' => 'SONDA PERIODONTAL NABERS'],);
		DesplegableNombreInventario::create(['nombre' => 'SONDA PERIODONTAL WOO'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA ALGODONERA'],);
		DesplegableNombreInventario::create(['nombre' => 'FÓRCEPS 151'],);
		DesplegableNombreInventario::create(['nombre' => 'FÓRCEPS 150'],);
		DesplegableNombreInventario::create(['nombre' => 'FÓRCEPS 16'],);
		DesplegableNombreInventario::create(['nombre' => 'FÓRCEPS 24'],);
		DesplegableNombreInventario::create(['nombre' => 'FÓRCEPS 69'],);
		DesplegableNombreInventario::create(['nombre' => 'ELEVADOR RECTO'],);
		DesplegableNombreInventario::create(['nombre' => 'ELEVADOR DE BANDERA DERECHO'],);
		DesplegableNombreInventario::create(['nombre' => 'ELEVADOR DE BANDERA IZQUIERDO'],);
		DesplegableNombreInventario::create(['nombre' => 'CURETAS PERIODONTAL'],);
		DesplegableNombreInventario::create(['nombre' => 'PUNTA CABIRÓN'],);
		DesplegableNombreInventario::create(['nombre' => 'PUNTA SCALER'],);
		DesplegableNombreInventario::create(['nombre' => 'FP3'],);
		DesplegableNombreInventario::create(['nombre' => 'CLEUOIDE Y DISCOIDE'],);
		DesplegableNombreInventario::create(['nombre' => 'INSTRUMENTO 21B'],);
		DesplegableNombreInventario::create(['nombre' => 'ESPÁTULA DE RESINA ANTERIORES'],);
		DesplegableNombreInventario::create(['nombre' => 'JERINGA CARPULE'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA KELLY CURVA'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA KELLY RECTA'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA DE MAYO'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA ADSON'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA CON GARRA'],);
		DesplegableNombreInventario::create(['nombre' => 'PINZA SIN GARRA'],);
		DesplegableNombreInventario::create(['nombre' => 'CASTRO VIEJO'],);
    }
}
