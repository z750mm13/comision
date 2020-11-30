<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $meses = [18,11,17,10,11,13,12];
        $requisito = 1;
        for ($anio=18; $anio <= 20; $anio++) { 
            for($i = 0; $i < 7; $i++){
                for ($j=0; $j < $meses[$i]; $j++) {
                    DB::table('tasks')->insert([
                        'programable'=>false,
                        'descripcion'=>'Se arreglará',
                        'cumplida' => 'true',
                        'user_id' => 1,
                        'requirement_id' => $requisito,
                        'created_at' => '20'.$anio.'-'.($i+1).'-01',
                        'updated_at' => '20'.$anio.'-'.($i+1).'-01'
                    ]);
                    $requisito++;
                }
            }
        }
    }
}
