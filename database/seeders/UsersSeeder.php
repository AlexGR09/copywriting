<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        //USER ROOT
        $user->email = 'root@gsm.com';
        $user->password = 'password';
        $user->job_position = 'Root';
        $user->save();

        //USER ADMINISTRATOR
        $user = new User();
        $user->email = 'administrator@gsm.com';
        $user->password = 'password';
        $user->job_position = 'Administrator';
        $user->save();

        //USER WRITER
        $user = new User();
        $user->email = 'writer@gsm.com';
        $user->password = 'password';
        $user->job_position = 'Writer';
        $user->save();

        //USER DESIGNER
        $user = new User();
        $user->email = 'designer@gsm.com';
        $user->password = 'password';
        $user->job_position = 'Designer';
        $user->save();

        //ASIGNACION DE ROLES A LOS USUARIOS
        $root = User::where('id', 1)->first();
        $root->assignRole(['Root']);

        $administrator = User::where('id', 2)->first();
        $administrator->assignRole(['Administrator']);

        $writer = User::where('id', 3)->first();
        $writer->assignRole(['Writer']);

        $designer = User::where('id', 4)->first();
        $designer->assignRole(['Designer']);
    }
}
