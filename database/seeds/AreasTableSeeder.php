<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AreasTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run() {
        DB::table('areas')->insert([
            'nombre'=>'Edificio A',
            'area'=>'Alarcón',
            'color'=>'#EF4430',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 1
            'nombre'=>'Aula 1',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 2
            'nombre'=>'Aula 2',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 3
            'nombre'=>'Aula 3',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 4
            'nombre'=>'Oficina de almacén',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 5
            'nombre'=>'Oficina de enfermería',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 6
            'nombre'=>'Pasillo del edificio A',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 7
            'nombre'=>'Entrada',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 8
            'nombre'=>'Área de basura',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 9
            'nombre'=>'Palapa 1',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 10
            'nombre'=>'Jardín del edificio A',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 11
            'nombre'=>'Patio exterior del edificio A',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 12
            'nombre'=>'Planta de energía del edificio A',
            'area_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio B',
            'area'=>'Alarcón',
            'color'=>'#A050AD',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 13
            'nombre'=>'Oficina anexa de recursos materiales',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 14
            'nombre'=>'Centro de información',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 15
            'nombre'=>'Oficina de servicios escolares',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 16
            'nombre'=>'Oficina de la incubadora de empresas',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 17
            'nombre'=>'Área de acceso',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 18
            'nombre'=>'Aula 4',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 19
            'nombre'=>'Sanitario de mujeres',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 20
            'nombre'=>'Sanitario de hombres',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 21
            'nombre'=>'Palapa 2',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 22
            'nombre'=>'Jardín 1 del edificio B',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 23
            'nombre'=>'Pasillo del edificio B',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 24
            'nombre'=>'Jardín 2 del edificio B',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 25
            'nombre'=>'Domo del edificio B',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 26
            'nombre'=>'Patio exterior del edificio B',
            'area_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio C',
            'area'=>'Alarcón',
            'color'=>'#4BAA87',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 27
            'nombre'=>'Aula 5',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 28
            'nombre'=>'Aula 6',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 29
            'nombre'=>'Aula 7',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 30
            'nombre'=>'Oficina anexa de recursos humanos',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 31
            'nombre'=>'Pasillo del edificio C',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 32
            'nombre'=>'Oficina de actividades extra escolares',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 33
            'nombre'=>'Jardín del edificio C',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 34
            'nombre'=>'Patio exterior del edificio C',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 35
            'nombre'=>'Palapa 3',
            'area_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio D',
            'area'=>'Alarcón',
            'color'=>'#E0472D',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 36
            'nombre'=>'Oficina de la coordinación de tutorías y revista institucional',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 37
            'nombre'=>'Sala de docentes',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 38
            'nombre'=>'Patio exterior del edificio D',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 39
            'nombre'=>'Palapa 4',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 40
            'nombre'=>'Tienda/Papelería',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 41
            'nombre'=>'Laboratorio de desarrollo comunitario',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 42
            'nombre'=>'Almacén de servicios generales',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 43
            'nombre'=>'Fosa séptica',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 44
            'nombre'=>'Vivero',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 45
            'nombre'=>'Invernadero',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 46
            'nombre'=>'Área de conejos',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 47
            'nombre'=>'Parcela 1',
            'area_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio E planta baja',
            'area'=>'Alarcón',
            'color'=>'#FCC830',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 48
            'nombre'=>'Laboratorio de gastronomía',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 49
            'nombre'=>'Sanitario de hombres',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 50
            'nombre'=>'Centro de computo',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 51
            'nombre'=>'Aula 12',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 52
            'nombre'=>'Sanitario de mujeres',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 53
            'nombre'=>'Aula 11',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 54
            'nombre'=>'Aula 10',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 55
            'nombre'=>'Aula 9',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 56
            'nombre'=>'Aula 8',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 57
            'nombre'=>'Escaleras',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio E planta alta',
            'area'=>'Alarcón',
            'color'=>'#FCC830',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 58
            'nombre'=>'Auditorio',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 59
            'nombre'=>'Aula 15',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 60
            'nombre'=>'Aula 14',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 61
            'nombre'=>'Aula 13',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 62
            'nombre'=>'Sanitario de hombres',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 63
            'nombre'=>'Sanitario de mujeres',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 64
            'nombre'=>'Oficina 18',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 65
            'nombre'=>'Oficina 19',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 66
            'nombre'=>'Oficina 20',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 67
            'nombre'=>'Oficina 17',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 68
            'nombre'=>'Oficina 16',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 69
            'nombre'=>'Oficina 14',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 70
            'nombre'=>'Oficina 15',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([// 71
            'nombre'=>'Oficina 13',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 72
            'nombre'=>'Oficina 12',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 73
            'nombre'=>'Oficina 11',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 74
            'nombre'=>'Oficina 10',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 75
            'nombre'=>'Oficina 9',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 76
            'nombre'=>'Oficina 21',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 77
            'nombre'=>'Sala de juntas',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 78
            'nombre'=>'Dirección',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 79
            'nombre'=>'Oficina 22',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 80
            'nombre'=>'Sanitario de mujeres',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 81
            'nombre'=>'Sanitario de hombres',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 82
            'nombre'=>'Escritorio 2',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 83
            'nombre'=>'Escritorio 3',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 84
            'nombre'=>'Escritorio 4',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 85
            'nombre'=>'Escritorio 5',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 86
            'nombre'=>'Escritorio 1',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 87
            'nombre'=>'Escritorio 6',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 88
            'nombre'=>'Pasillo de oficinas',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 89
            'nombre'=>'Pasillo del edificio E planta alta',
            'area_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 90
            'nombre'=>'Pasillo del edificio E planta baja',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 91
            'nombre'=>'Palapa 5',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 92
            'nombre'=>'Domo del edificio E',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 93
            'nombre'=>'Oficina de recursos materiales y almacén',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 94
            'nombre'=>'Estanque de agua',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 95
            'nombre'=>'Planta eléctrica del edificio E',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('subareas')->insert([// 96
            'nombre'=>'Patio exterior del edificio E',
            'area_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);//

        DB::table('areas')->insert([
            'nombre'=>'Edificio F planta baja',
            'area'=>'Santa Gertrudis',
            'color'=>'#1976D2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Aula 16',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Aula 17',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Sala de docentes',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Sanitario de hombres',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Oficina de IAD',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Bodega de servicios generales',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Cancha de fútbol',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Palapa 6',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Caseta de comida',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Entrada',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('areas')->insert([
            'nombre'=>'Edificio F planta alta',
            'area'=>'Santa Gertrudis',
            'color'=>'#1976D2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Aula 18',
            'area_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Aula 19',
            'area_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([
            'nombre'=>'Centro de computo',
            'area_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 110
            'nombre'=>'Área en construcción 1',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 111
            'nombre'=>'Área en construcción 2',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 112
            'nombre'=>'Sanitario de mujeres',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 113
            'nombre'=>'Jardín del edificio F',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 114
            'nombre'=>'Escaleras',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 115
            'nombre'=>'Pasillo del edificio E planta baja',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 116
            'nombre'=>'Área de basura',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 117
            'nombre'=>'Estacionamiento',
            'area_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('subareas')->insert([ // 118
            'nombre'=>'Pasillo del edificio E planta alta',
            'area_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
