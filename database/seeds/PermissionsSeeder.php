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
        array_push($permissions_array,Permission::create(['name' => 'ver roles']));
        array_push($permissions_array,Permission::create(['name' => 'editar roles']));
        array_push($permissions_array,Permission::create(['name' => 'crear roles']));
        array_push($permissions_array,Permission::create(['name' => 'borrar roles']));

        //usuarios
        array_push($permissions_array,Permission::create(['name' => 'ver usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'editar usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'crear usuarios']));
        array_push($permissions_array,Permission::create(['name' => 'borrar usuarios']));

        //inventarios
        array_push($permissions_array,Permission::create(['name' => 'ver inventarios']));
        array_push($permissions_array,Permission::create(['name' => 'editar inventarios']));
        array_push($permissions_array,Permission::create(['name' => 'crear inventarios']));
       array_push($permissions_array, Permission::create(['name' => 'borrar inventarios']));

        //ingresos y egresos
        array_push($permissions_array,Permission::create(['name' => 'ver ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'editar ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'crear ingresos']));
        array_push($permissions_array,Permission::create(['name' => 'borrar ingresos']));

        //insumos
        array_push($permissions_array,Permission::create(['name' => 'ver insumos']));
        array_push($permissions_array,Permission::create(['name' => 'editar insumos']));
        array_push($permissions_array,Permission::create(['name' => 'crear insumos']));
        array_push($permissions_array,Permission::create(['name' => 'borrar insumos']));

        //creacion de rol superAdminRole y asignacion del permiso para ver notas
        $superAdminRole = Role::create(['name' => 'SUPER ADMINISTRADOR']);
        $superAdminRole->syncPermissions($permissions_array);

        //creacion de usuario userSuperAdmin
        $userSuperAdmin = User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignacion de rol SUPER ADMINISTRADOR
        $userSuperAdmin->assignRole('SUPER ADMINISTRADOR');

    }
}
