<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => env('MAIN_EMAIL'),
            'password' => bcrypt(env('FIRST_PASSWD_MAIN_EMAIL')),
            'active' => true,
            'admin' => true,
            'nombre' => 'Judith',
            'apellidos' => 'Antonio Benito',
            'tipo' => 'Integrante',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cordinates')->insert([
            'rol' => 'Coordinación',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
