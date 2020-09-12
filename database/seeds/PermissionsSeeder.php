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
        array_push($permissions_array, Permission::create(['name' => 'crear_notas']));
        array_push($permissions_array, Permission::create(['name' => 'editar_notas']));
        array_push($permissions_array, Permission::create(['name' => 'borrar_notas']));
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

        //persmisos para ver notas
        $verNotasPermission = Permission::create(['name' => 'ver_notas']);
        array_push($permissions_array, $verNotasPermission);

        //creacion de rol superAdminRole y asignacion del permiso para ver notas
        $superAdminRole = Role::create(['name' => 'super_administrador']);
        $superAdminRole->syncPermissions($permissions_array);

        //creacion de rol verNotasRole y asignacion del permiso para ver notas
        $verNotasRole = Role::create(['name' => 'ver_notas']);
        $verNotasRole->givePermissionTo($verNotasPermission);

        //creacion de usuario userSuperAdmin
        $userSuperAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignacion de rol super_administrador
        $userSuperAdmin->assignRole('super_administrador');

        //creacion de usuario userVerNotas
        $userVerNotas = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignacion de rol userVerNotas
        $userVerNotas->assignRole('ver_notas');

        User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
