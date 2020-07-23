<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $roles = ['Dirección general', 'Representante de dirección general','Subdirección administrativa','Subdirección académica','Subdirección de vinculación'];
        foreach ($roles as $rol)
            DB::table('roles')->insert([
                'rol' => $rol,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
