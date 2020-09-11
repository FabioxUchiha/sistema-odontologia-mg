<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserRolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles
        Permission::create(['name' => 'ver_roles']);
        Permission::create(['name' => 'editar_roles']);
        Permission::create(['name' => 'crear_roles']);
        Permission::create(['name' => 'borrar_roles']);

        //usuarios
        Permission::create(['name' => 'ver_usuarios']);
        Permission::create(['name' => 'editar_usuarios']);
        Permission::create(['name' => 'crear_usuarios']);
        Permission::create(['name' => 'borrar_usuarios']);

        //inventarios
        Permission::create(['name' => 'ver_inventarios']);
        Permission::create(['name' => 'editar_inventarios']);
        Permission::create(['name' => 'crear_inventarios']);
        Permission::create(['name' => 'borrar_inventarios']);

        //ingresos y egresos
        Permission::create(['name' => 'ver_ingresos']);
        Permission::create(['name' => 'editar_ingresos']);
        Permission::create(['name' => 'crear_ingresos']);
        Permission::create(['name' => 'borrar_ingresos']);
    }
}
