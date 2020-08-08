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
    }
}
