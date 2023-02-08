<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            //CRUD ROLES
            ['name' => 'create roles', 'guard_name' => 'jwt'],
            ['name' => 'show roles', 'guard_name' => 'jwt'],
            ['name' => 'update roles', 'guard_name' => 'jwt'],
            ['name' => 'delete roles', 'guard_name' => 'jwt'],

            //CRUD ADMINISTRATION
            ['name' => 'create user', 'guard_name' => 'jwt'],
            ['name' => 'show user', 'guard_name' => 'jwt'],
            ['name' => 'update user', 'guard_name' => 'jwt'],
            ['name' => 'delete user', 'guard_name' => 'jwt'],
            //CRUD TEAM
            ['name' => 'create team', 'guard_name' => 'jwt'],
            ['name' => 'show team', 'guard_name' => 'jwt'],
            ['name' => 'update team', 'guard_name' => 'jwt'],
            ['name' => 'delete team', 'guard_name' => 'jwt'],
        ]);
    }
}
