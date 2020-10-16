<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(UserRolesPermissionsSeeder::class);
        $this->call(DesplegableNombreInventarioSeeder::class);
        $this->call(DesplegableServicioIngresoSeeder::class);
        $this->call(DesplegableCategoriaInstrumentalSeeder::class);
        $this->call(DesplegableMarcaInstrumentalSeeder::class);
        $this->call(DesplegableNombreInsumosSeeder::class);
        $this->call(DesplegableMarcaInsumosSeeder::class);
    }
}
