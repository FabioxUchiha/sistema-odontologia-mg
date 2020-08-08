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
        array_push($permissions_array, $permission = Permission::create(['name' => 'crear_notas']));
        array_push($permissions_array, $permission = Permission::create(['name' => 'editar_notas']));
        array_push($permissions_array, $permission = Permission::create(['name' => 'borrar_notas']));
        array_push($permissions_array, $permission = Permission::create(['name' => 'ver_notas']));

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
