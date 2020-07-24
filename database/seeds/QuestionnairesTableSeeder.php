<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionnairesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run() {
        DB::table('questionnaires')->insert([
            'tipo' => 'ESCALERAS Y PASILLOS',
            'descripcion' => 'Se aplica si el área tiene escaleras o pasillos.',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Escaleras y pasillos en buen estado',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Barandales en buen estado',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existencia de cintas antiderrapantes',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existe iluminación artificial necesaria',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con señalización',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'la bitácora de mantenimiento está en orden',
            'questionnaire_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('questionnaires')->insert([
            'tipo' => 'ESTRUCTURA',
            'descripcion' => 'Se aplica a estructuras',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las paredes o columnas están en buen estado (no hay grietas o repellado suelto que podría caer)',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'El inmueble está libre de hundimientos',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'El inmueble no presenta separación de la cimentación',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Está libre de daños en trabes',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Está libre de daño en vigas',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Está libre de daño en muros de carga',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Techo en buen estado (no existe presencia de salitre, oxidación, fisuras y desprendimiento de concreto)',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'El cielo raso por el material con que está hecho por su diseño, está bien asegurado',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las ventanas tiene protección, están completas y en buen estado',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las instalaciones reciben mantenimiento',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Piso en buenas condiciones, no presenta grietas o hundimientos',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Mobiliario en buen estado',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existen puertas en buen estado y si existen',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La puerta es suficientemente amplia',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con salida de emergencia',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'la bitácora de mantenimiento está en orden',
            'questionnaire_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('questionnaires')->insert([
            'tipo' => 'SANIDAD',
            'descripcion' => 'Se aplica a zonas con acceso a agua como baños',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'El agua que se utiliza es potable y limpia (entubada)',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con cisterna',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Los baños/letrinas están limpios y en buenas condiciones de uso',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existe un plan para el manejo de basura',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La escuela se encuentra libre de objetos inservibles',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La bitácora de mantenimiento está en orden',
            'questionnaire_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('questionnaires')->insert([
            'tipo' => 'INSTALACIONES DE GAS',
            'descripcion' => 'Se aplica a zonas con acceso a gas',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Tienen tanque de gas estacionario',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las instalaciones de gas son de cobre flexible',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Se brinda mantenimiento preventivo de manera periódica',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con responsiva de empresa gasera',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con dictamen de instalaciones de gas',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La bitácora de mantenimiento está en orden',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con manual de procedimientos en orden',
            'questionnaire_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('questionnaires')->insert([
            'tipo' => 'INSTALACIONES ELÉCTRICAS',
            'descripcion' => 'Se aplica a zonas con acceso a electricidad',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Sistema eléctrico en buen estado',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las lámparas de alumbrado están bien aseguradas',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Los cables de la instalación eléctrica no están sueltos ni presentan algún peligro',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con tablero en buen estado eléctrico',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Se brinda mantenimiento preventivo de manera periódica',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las instalaciones están en buenas condiciones',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La bitácora de mantenimiento está en orden',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con dictamen de instalaciones eléctricas.',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con manual de procedimientos en orden',
            'questionnaire_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('questionnaires')->insert([
            'tipo' => 'INSTALACIONES EN GENERAL',
            'descripcion' => 'Se aplica a las instalaciones en general',
            'requirement_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'El material educativo está colocado de tal forma que no representa un peligro.',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existen muebles o estantes de pared bien asegurados a los muros',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con señalización de protección civil (punto de reunión, descenso de escalera, ruta de evacuación y/o zona de menor riesgo)',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las ventanas tienen cortinas o algún material que proteja a los alumnos de la caída ruptura o dispersión súbita de vidrios',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Las pizarras están sujetas a la pared',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La cantidad de alumnos o trabajadores es la adecuada, según las especificaciones técnicas del diseño del aula o espacio de trabajo',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'La disposición de los pupitres, mobiliario permite el desplazamiento de los alumnos o trabajadores de forma rápida y sin obstáculos hacia la salida del aula o espacio de trabajo',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Se encuentra libre de objetos pesados sobre los estantes o muebles cuya altura es mayor a la de los alumnos cuando están sentados',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Se encuentra libre de peceras u otros objetos de vidrio, cerámica o hierro que pueden resultar peligrosos si cayeran al piso',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Está libre de basura, papeles o algún material combustible acumulado o guardado',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Se encuentra libre de rejas o cercas metálicas que impiden salir con seguridad',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existen botiquines de primeros auxilios suficientes',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existen extintores suficientes',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Existe sistema de alerta',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('questions')->insert([
            'encabezado' => 'Cuenta con manual de procedimientos en orden',
            'questionnaire_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
