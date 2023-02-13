<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Root',
                'guard_name' => 'jwt',
            ],
            [
                'name' => 'Administrator',
                'guard_name' => 'jwt',
            ],
            [
                'name' => 'Root Writer',
                'guard_name' => 'jwt',
            ],
            [
                'name' => 'Writer',
                'guard_name' => 'jwt',
            ],
            [
                'name' => 'Designer',
                'guard_name' => 'jwt',
            ],
        ]);
        //SE LE ASIGNA PERMISOS A LOS ROLES DE USUARIOS

        //USUARIO ROOT
        Role::findByName('Root')->givePermissionTo(Permission::all());
        //ROOT WRITER
        Role::findByName('Root Writer')->givePermissionTo([
            'qualify texts',
            'create texts note'
        ]);
        //ADMINISTRADOR
        Role::findByName('Administrator')->givePermissionTo([
            'create user',
            'show user',
            'update user',
            'delete user',
            'create team',
            'show team',
            'update team',
            'delete team',
        ]);

        //WRITER/REDACTOR
        Role::findByName('Administrator')->givePermissionTo([
                'create text',
                'show text',
                'update text',
                'delete text',
            ]);
    }
}
