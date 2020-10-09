<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creacion de un arreglo de permisos para el super administrador
        $permissions_array = [];
        //notas
        array_push($permissions_array, Permission::create(['name' => 'ver notas']));
        array_push($permissions_array, Permission::create(['name' => 'crear notas']));
        array_push($permissions_array, Permission::create(['name' => 'editar notas']));
        array_push($permissions_array, Permission::create(['name' => 'borrar notas']));
        //roles
        array_push($permissions_array,Permission::create(['name' => 'ver_roles']));
        array_push($permissions_array,Permission::create(['name' => 'editar_roles']));
        array_push($permissions_array,Permission::create(['name' => 'crear_roles']));
        array_push($permissions_array,Permission::create(['name' => 'borrar_roles']));

        //usuarios
        array_push($permissions_array,Permission::create(['name' => 'ver_usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'editar_usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'crear_usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'borrar_usuarios']));

        //inventarios
        array_push($permissions_array,Permission::create(['name' => 'ver_inventarios']));
        array_push($permissions_array,Permission::create(['name' => 'editar_inventarios']));
        array_push($permissions_array,Permission::create(['name' => 'crear_inventarios']));
       array_push($permissions_array, Permission::create(['name' => 'borrar_inventarios']));

        //ingresos y egresos
        array_push($permissions_array,Permission::create(['name' => 'ver_ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'editar_ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'crear_ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'borrar_ingresos']));

        //insumos
        array_push($permissions_array,Permission::create(['name' => 'ver_insumos']));
        array_push($permissions_array,Permission::create(['name' => 'editar_insumos']));
        array_push($permissions_array,Permission::create(['name' => 'crear_insumos']));
        array_push($permissions_array,Permission::create(['name' => 'borrar_insumos']));

        //creacion de rol superAdminRole y asignacion del permiso para ver notas
        $superAdminRole = Role::create(['name' => 'super_administrador']);
        $superAdminRole->syncPermissions($permissions_array);

        //creacion de usuario userSuperAdmin
        $userSuperAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignacion de rol super_administrador
        $userSuperAdmin->assignRole('super_administrador');

    }
}
