<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run() {
        /**
         * NOM-001
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-001-STPS-2008',
            'titulo' => 'EDIFICIOS, LOCALES, INSTALACIONES Y ÁREAS EN LOS CENTROS DE TRABAJO - CONDICIONES DE SEGURIDAD',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-001.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => 'Conservar en condiciones seguras las instalaciones de los centros de trabajo, para que no representen riesgos. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => '  Contar con sanitarios (retretes, mingitorios, lavabos, entre otros) limpios y seguros para el servicio de los trabajadores y, en su caso, con lugares reservados para el consumo de alimentos. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'Contar, en su caso, con regaderas y vestidores, de acuerdo con la actividad que se desarrolle en el centro de trabajo o cuando se requiera la descontaminación del trabajador. Es responsabilidad del patrón establecer el tipo, características y cantidad de los servicios. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.1',
            'descripcion' => 'Contar con orden y limpieza permanentes en las áreas de trabajo, así como en pasillos exteriores a los edificios, estacionamientos y otras áreas comunes del centro de trabajo, de acuerdo al tipo de actividades que se desarrollen',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.2',
            'descripcion' => ' Las áreas de producción, de mantenimiento, de circulación de personas y vehículos, las zonas de riesgo, de almacenamiento y de servicios para los trabajadores del centro de trabajo, se deben delimitar de tal manera que se disponga de espacios seguros para la realización de las actividades de los trabajadores que en ellas se encuentran. ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.3',
            'descripcion' => ' Cuando laboren trabajadores discapacitados en los centros de trabajo, las puertas, vías de acceso y de circulación, escaleras, lugares de servicio y puestos de trabajo, deben facilitar sus actividades y desplazamientos. ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => '',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.4',
            'descripcion' => 'Las escaleras, rampas, escaleras manuales, puentes y plataformas elevadas deben, además de cumplir con lo que se indica en la presente Norma, mantenerse en condiciones tales que eviten que el trabajador resbale al usarlas.',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.5',
            'descripcion' => 'Los elementos estructurales tales como pisos, puentes o plataformas, entre otros, destinados a soportar cargas fijas o móviles, deben ser utilizados para los fines a que fueron destinados. En caso de requerir un cambio de uso, se debe evaluar si los elementos estructurales tienen la capacidad de soportar las nuevas cargas y, en su caso, hacer las adecuaciones necesarias para evitar riesgos de trabajo.',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.6',
            'descripcion' => 'Los edificios y elementos estructurales deben soportar las cargas fijas o móviles de acuerdo a la naturaleza de las actividades que en ellos se desarrollen, de tal manera que su resistencia evite posibles fallas estructurales y riegos de impacto, para lo cual deben considerarse las condiciones normales de operación y los eventos tanto naturales como incidentales que puedan afectarlos. ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Los techos del centro de trabajo deben: a) Ser de materiales que protejan de las condiciones ambientales externas; b) Utilizarse para soportar cargas fijas o móviles, sólo si fueron diseñados o reconstruidos para estos fines; c) Permitir la salida de líquidos, y d) Soportar las condiciones normales de operación. ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => ' Paredes. Las paredes en los centros de trabajo deben: a) Mantenerse con colores tales que eviten la reflexión de la luz, cuando se trate de las caras interiores, para no afectar la visión del trabajador; b) Utilizarse para soportar cargas sólo si fueron destinadas para estos fines, y c) Contar con medidas de seguridad, tales como protección y señalización de las zonas de riesgo, sobre todo cuando en ellas existan aberturas de más de dos metros de altura hacia el otro lado de la pared, por las que haya peligro de caídas para el trabajador',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.4',
            'descripcion' => 'Pisos. Los pisos del centro de trabajo deben: a) Mantenerse en condiciones tales que de acuerdo al tipo de actividades que se desarrollen, no generen riesgos de trabajo; b) Mantenerse de tal manera que los posibles estancamientos de líquidos no generen riesgos de caídas o resbalones; c) Ser llanos en las zonas para el tránsito de las personas; d) Contar con protecciones tales como cercas provisionales o barandales desmontables, de una altura mínima de 90 cm u otro medio que proporcione protección, cuando tengan aberturas temporales de escotillas, conductos, pozos y trampas, durante el tiempo que se requiera la abertura, y e) Contar con señalización de acuerdo con la NOM-026-STPS-1998, donde existan riesgos por cambio de nivel, o por las características de la actividad o proceso que en él se desarrolle.',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5',
            'descripcion' => 'Escaleras. Las escaleras de los centros de trabajo deben cumplir con lo siguiente: a) Tener un ancho constante de al menos 56 cm en cada tramo recto y, en ese caso, se debe señalizar que se prohíbe la circulación simultánea en contraflujo. Las señales deben cumplir con lo establecido en la NOM-026-STPS-1998; b) Cuando tengan descansos, éstos deberán tener al menos 56 cm para las de tramos rectos utilizados en un solo sentido de flujo a la vez, y de al menos 90 cm para las de ancho superior; c) Todas las huellas de las escaleras rectas deben tener el mismo ancho y todos los peraltes la misma altura, con una variación máxima de ± 0.5 cm; d) En las escaleras con cambios de dirección o en las denominadas de caracol, el peralte debe ser siempre de la misma altura; ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5.1',
            'descripcion' => 'Escaleras de emergencia exteriores. Las escaleras de emergencia exteriores deben contar con las siguientes condiciones: a) Ser de diseño recto en sus secciones o tramos; b) En todo momento, ser operadas sin que existan medios que obstruyan u obstaculicen su accionamiento; c) Por cada piso, tener un acceso directo a ellas a través de una puerta de salida que se encuentre al mismo nivel; d) Ser diseñadas de tal forma que drenen con facilidad los líquidos que en ellas pudieran caer y eviten su acumulación; e) Que los pisos y huellas sean resistentes y de material antiderrapante y, en su caso, contar con descansos; f) Estar fijas en forma permanente en todos los pisos excepto en el inferior, en el que se pueden instalar plegables. En este último caso, deben ser de diseño tal que al accionarlas bajen hasta el suelo; ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5.2',
            'descripcion' => ' Escaleras con barandales con espacios abiertos. Las escaleras con barandales que cuenten con espacios abiertos por debajo de ellos, deben tener al menos una baranda dispuesta paralelamente a la inclinación de la escalera, y cumplir con lo siguiente: a) El pasamanos debe estar a una altura de 90 cm ± 10 cm; b) Las barandas deben estar colocadas a una distancia intermedia entre el barandal y la paralela formada con la altura media del peralte de los escalones. Los balaustres deben estar colocados, en este caso, cada cuatro escalones; c) En caso de no colocar baranda, colocar balaustres en cada escalón; d) Los pasamanos deben ser continuos, lisos y pulidos; e) En caso de contar con pasamanos sujetos a la pared, éstos deben estar fijados por medio de anclas aseguradas en la parte inferior;',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.6',
            'descripcion' => 'Rampas  Las rampas que se utilicen en el centro de trabajo deben cumplir con las siguientes condiciones: a) Las cargas que por ellas circulen no deben sobrepasar la resistencia para la que fueron destinadas; b) No deben tener deformaciones que generen riesgos a los transeúntes o vehículos que por ellas circulen, sin importar si son fijas o móviles. En las rampas móviles se deberá indicar la capacidad de carga máxima; c) Las que se utilicen para el tránsito de trabajadores, deben tener una pendiente máxima de 10%; si son para mantenimiento deben tener una pendiente máxima de 17%, de acuerdo con la siguiente ecuación: P = (H/L) x 100  donde:  P = pendiente, en tanto por ciento.  H = altura desde el nivel inferior hasta el superior, medida sobre la vertical, en cm.  L = longitud de la proyección horizontal del plano de la rampa, en cm. d) Deben tener el ancho suficiente para ascender y descender sin que se presenten obstrucciones en el tránsito de los trabajadores; e) Cuando estén destinadas al tránsito de vehículos, deben ser igual al ancho del vehículo más grande que circule por la rampa más 60 cm; f) Cuando la altura entre el nivel superior e inferior exceda de 150 cm, deben contar con barandal de protección lateral; g) Cuando se encuentren cubiertas por muros en sus dos costados, deben tener al menos un pasamanos. No aplica esta disposición cuando la rampa se destine sólo a tránsito de vehículos; ',
            'tipo' => '7. Requisitos de seguridad en el centro de trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8',
            'descripcion' => ' Condiciones de seguridad en el funcionamiento de los sistemas de ventilación artificial ',
            'tipo' => '8. Condiciones de seguridad en el funcionamiento de los sistemas de ventilación artificial ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' El aire que se extrae no debe contaminar otras áreas en donde se encuentren laborando otros trabajadores. ',
            'tipo' => '8. Condiciones de seguridad en el funcionamiento de los sistemas de ventilación artificial ',
            'frecuencia' => '',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => ' El sistema debe iniciar su operación antes de que ingresen los trabajadores al área correspondiente para permitir la purga de los contaminantes. ',
            'tipo' => '8. Condiciones de seguridad en el funcionamiento de los sistemas de ventilación artificial ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9',
            'descripcion' => ' Requisitos de seguridad para el tránsito de vehículos',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos',
            'frecuencia' => '',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => ' El ancho de las puertas donde circulen vehículos deberá ser superior al ancho del vehículo más grande que circule por ellas. Cuando éstas se destinen simultáneamente al tránsito de vehículos y trabajadores, deben contar con un pasillo que permita el tránsito seguro del trabajador, delimitado o señalado mediante franjas amarillas en el piso o en guarniciones. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => 'En caso de no contar con el espacio a que se refiere el inciso anterior, se debe colocar al menos un señalamiento de prohibición para el tránsito simultáneo. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.3',
            'descripcion' => 'Las áreas internas de tránsito de vehículos deben estar delimitadas o señalizadas. Las externas deben estar identificadas o señalizadas. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.4',
            'descripcion' => 'Las áreas de carga y descarga deben estar delimitadas o señalizadas. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.8',
            'descripcion' => 'En las operaciones de carga y descarga de vehículos se deben adoptar las medidas siguientes: 
        a) Frenar y bloquear las ruedas de los vehículos, cuando éstos se encuentren detenidos, y 
        b) En el caso de muelles para carga y descarga de tráileres o autotanques, bloquear por lo menos una de las llantas en ambos lados del vehículo y colocar un yaque para inmovilizarlo cuando esté siendo cargado o descargado. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.9',
            'descripcion' => ' La velocidad máxima de circulación de los vehículos debe estar señalizada en las zonas de carga y descarga, en patios de maniobras, en establecimientos y en otras áreas de acuerdo al tipo de actividades que en ellas se desarrollen para que sea segura la circulación de trabajadores, personal externo y vehículos. Es responsabilidad del patrón fijar los límites de velocidad de los vehículos para que su circulación no sea un factor de riesgo en el centro de trabajo. ',
            'tipo' => '9. Requisitos de seguridad para el tránsito de vehículos ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3',
            'descripcion' => 'Contar con un programa anual de mantenimiento preventivo o correctivo, a fin de que el sistema esté en condiciones de uso. El contenido del programa y los resultados de su ejecución deben conservarse por un año y estar registrados en bitácoras o cualquier otro medio, incluyendo los magnéticos. ',
            'tipo' => '8. Condiciones de seguridad en el funcionamiento de los sistemas de ventilación artificial ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Realizar verificaciones oculares cada doce meses al centro de trabajo, pudiendo hacerse por áreas, para identificar condiciones inseguras y reparar los daños encontrados. Los resultados de las verificaciones deben registrarse a través de bitácoras, medios magnéticos o en las actas de verificación de la comisión de seguridad e higiene, mismos que deben conservarse por un año y contener al menos las fechas en que se realizaron las verificaciones, el nombre del área del centro de trabajo que fue revisada y, en su caso, el tipo de condición insegura encontrada, así como el tipo de reparación realizada.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Efectuar verificaciones oculares posteriores a la ocurrencia de un evento que pudiera generarle daños al centro de trabajo y, en su caso, realizar las adecuaciones, modificaciones o reparaciones que garanticen la seguridad de sus ocupantes. De tales acciones registrar los resultados en bitácoras o medios magnéticos. Los registros deben conservarse por un año y contener al menos la fecha de la verificación, el tipo de evento, los resultados de las verificaciones y las acciones correctivas realizadas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 1,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-029
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-029-STPS-2011',
            'titulo' => ' Mantenimiento de las instalaciones eléctricas en los centros de
        trabajo-Condiciones de seguridad. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-029.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => ' Prohibir que menores de 16 años y mujeres gestantes realicen actividades de mantenimiento de las
        instalaciones eléctricas. 
        ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Contar con el plan de trabajo para los trabajadores que realizan actividades de mantenimiento de las
        instalaciones eléctricas, de conformidad con lo dispuesto en el Capítulo 7 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Contar con el diagrama unifilar actualizado de la instalación eléctrica del centro de trabajo, con base en
        lo dispuesto por la NOM-001-SEDE-2005, o las que la sustituyan, y con el cuadro general de cargas
        instaladas por circuito derivado, el cual deberá estar disponible para el personal que realice el mantenimiento
        de dichas instalaciones. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Contar con los procedimientos de seguridad para las actividades de mantenimiento de las
        instalaciones eléctricas; la selección y uso del equipo de trabajo, maquinaria, herramientas e implementos de
        protección aislante, y la colocación del sistema de puesta a tierra temporal, de acuerdo con lo establecido en
        el Capítulo 8 de esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => ' Realizar las actividades de mantenimiento de las instalaciones eléctricas sólo con personal capacitado. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => 'Proporcionar al personal que desarrolle las actividades de mantenimiento de las instalaciones
        eléctricas, el equipo de trabajo, maquinaria, herramientas e implementos de protección aislante que
        garanticen su seguridad, según el nivel de tensión o corriente de alimentación de la instalación eléctrica. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Elaborar y dar seguimiento a un programa de revisión y conservación del equipo de trabajo,
        maquinaria, herramientas e implementos de protección aislante utilizados en las actividades de mantenimiento
        de las instalaciones eléctricas, el cual deberá contener al menos, las fechas de realización, el responsable de
        su cumplimiento y el resultado de su ejecución.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Proporcionar a los trabajadores que realizan actividades de mantenimiento de las instalaciones
        eléctricas, el equipo de protección personal, conforme a lo dispuesto por la NOM-017-STPS-2008, o las que
        la sustituyan. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => 'Contar con procedimientos para el uso, revisión, reposición, limpieza, limitaciones, resguardo y
        disposición final del equipo de protección personal, basados en la información del fabricante, y de conformidad
        con lo que señala la NOM-017-STPS-2008, o las que la sustituyan. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => ' Cumplir, según aplique, con las medidas y condiciones de seguridad establecidas en los capítulos
        del 9 al 12 de la presente Norma, para realizar actividades de mantenimiento de las instalaciones eléctricas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.12',
            'descripcion' => ' Disponer en las zonas de trabajo de al menos un extintor, accesible en todo momento, de la
        capacidad y tipo de fuego que se pueda presentar, de acuerdo con la determinación de riesgos potenciales a
        que se refiere el numeral 7.2 de esta Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.13',
            'descripcion' => 'Autorizar por escrito a trabajadores capacitados para realizar actividades de mantenimiento de las
        instalaciones eléctricas en altura, espacios confinados o subestaciones, así como a los que manejen partes
        vivas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.14',
            'descripcion' => 'Informar a los trabajadores que realicen actividades de mantenimiento de las instalaciones eléctricas,
        sobre los riesgos a los que están expuestos y de las medidas de seguridad que deberán adoptar para la
        actividad a desarrollar en la zona de trabajo. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.15',
            'descripcion' => 'Contar con un plan de atención a emergencias, disponible para su consulta y aplicación, con base en
        lo establecido en el Capítulo 13 de la presente Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.16',
            'descripcion' => ' Contar con un botiquín de primeros auxilios que contenga el manual y los materiales de curación
        necesarios para atender los posibles casos de emergencia, identificados de acuerdo con los riesgos a que
        estén expuestos los trabajadores, y para atender a los lesionados o accidentados por efectos de la energía
        eléctrica. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.17',
            'descripcion' => 'Proporcionar capacitación y adiestramiento a los trabajadores que realicen actividades de
        mantenimiento de las instalaciones eléctricas del centro de trabajo, con base en los procedimientos de
        seguridad que para tal efecto se elaboren, conforme a lo dispuesto en el Capítulo 14 de esta Norma',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.18',
            'descripcion' => ' Supervisar que los contratistas cumplan con lo establecido en la presente Norma, cuando el patrón
        convenga servicios con ellos para realizar trabajos de mantenimiento de las instalaciones eléctricas',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.19',
            'descripcion' => ' Contar con registros de los resultados del mantenimiento llevado a cabo a las instalaciones eléctricas,
        que al menos consideren el nombre del responsable de realizar el trabajo; las actividades desarrolladas y sus
        resultados, así como las fechas en que se realizaron dichos trabajos. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' Por cada actividad de mantenimiento de las instalaciones eléctricas se deberá contar con un plan de
        trabajo que considere:
        a) La descripción de la actividad por desarrollar;
        b) El nombre del jefe de trabajo;
        c) El nombre de los trabajadores que intervienen en la actividad;
        d) El tiempo estimado para realizar la actividad;
        e) El lugar donde se desarrollará la actividad;
        f) En su caso, la autorización, la cual deberá contener al menos:
        1) El nombre del trabajador autorizado;
        2) El nombre y firma del patrón o de la persona que éste designe para otorgar la autorización;
        3) El tipo de trabajo por desarrollar;
        4) El área o lugar donde se desarrollará la actividad;
        5) La fecha y hora de inicio de las actividades, y
        6) El tiempo estimado de terminación;
        g) Los riesgos potenciales determinados con base en lo dispuesto en el numeral 7.2;
        h) El equipo de protección personal y los equipos de trabajo, maquinaria, herramientas e implementos
        de protección aislante que se requieran para realizar la actividad;
        i) Las medidas de seguridad que se requieran, de acuerdo con los riesgos que se puedan presentar al
        desarrollar el trabajo, y
        j) Los procedimientos de seguridad para realizar las actividades. ',
            'tipo' => '7. Plan de trabajo y determinación de riesgos potenciales',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => ' Para la determinación de los riesgos potenciales se deberá considerar, según aplique, lo siguiente:
        a) La exposición del trabajador a los peligros relacionados con:
        1) Las instalaciones inmediatas a la zona de trabajo;
        2) Los peligros identificados fuera de la zona de trabajo, y
        3) Los peligros originados por otro tipo de actividades en las inmediaciones del lugar donde se
        realizará el trabajo; b) Las consecuencias por las actividades a realizar en las inmediaciones del lugar donde se realizará el
        trabajo;
        c) La ubicación del equipo eléctrico, la zona y distancias de seguridad, de acuerdo con la tensión
        eléctrica y las fallas probables;
        d) Las características de los equipos de trabajo, maquinaria, herramientas e implementos de protección
        aislante a utilizar, y los movimientos a realizar para evitar actos o condiciones inseguras;
        e) Las partes del equipo que requieran protección física para evitar el contacto con partes vivas, tales
        como líneas energizadas y bancos de capacitores, entre otros;
        f) Las maniobras necesarias a realizar antes y después del mantenimiento de las instalaciones
        eléctricas, en especial las relacionadas con la apertura o cierre de los dispositivos de protección y/o
        de los medios de conexión y desconexión;
        g) El equipo de protección personal y los equipos de trabajo, maquinaria, herramientas e implementos
        de protección aislante con que se cuenta y los que se requieran para el tipo de instalaciones
        eléctricas a las que se dará mantenimiento;
        h) Los procedimientos de seguridad con que se cuenta para realizar las actividades;
        i) Las instalaciones temporales y su impacto en las operaciones y actividades a realizar, en su caso, y
        j) La frecuencia con la que se ejecuta la actividad.  ',
            'tipo' => '7. Plan de trabajo y determinación de riesgos potenciales',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => ' El plan de trabajo deberá:
        a) Proporcionarse al trabajador que realizará la actividad, y
        b) Ser aprobado por el patrón o por el responsable de los servicios preventivos de seguridad y salud en
        el trabajo o por el jefe de trabajo. ',
            'tipo' => '7. Plan de trabajo y determinación de riesgos potenciales',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.4',
            'descripcion' => ' El plan de trabajo se deberá revisar y, en su caso, actualizar cuando se modifiquen los procedimientos
        de seguridad, o se realice cualquier cambio en su contenido que altere las condiciones en las que se ejecuta
        el mantenimiento de las instalaciones eléctricas.',
            'tipo' => '7. Plan de trabajo y determinación de riesgos potenciales',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' Los procedimientos de seguridad para realizar las actividades de mantenimiento de las instalaciones
        eléctricas deberán contemplar, según aplique, lo siguiente:
        a) La indicación para que toda instalación eléctrica se considere energizada hasta que se realice la
        comprobación de ausencia de tensión eléctrica, mediante equipos o instrumentos de medición
        destinados para tal efecto; se efectúe la puesta a tierra para la liberación de energía almacenada, y
        la instalación eléctrica sea puesta a tierra eficaz;
        b) Las instrucciones para comprobar de forma segura la presencia o ausencia de la tensión eléctrica en
        equipos o instalaciones eléctricas a revisar, por medio del equipo de medición o instrumentos que se
        requieran;
        c) La indicación para la revisión y ajuste de la coordinación de protecciones;
        d) Las instrucciones para bloquear equipos o colocar señalización, candados, o cualquier otro
        dispositivo, a efecto de garantizar que el circuito permanezca desenergizado cuando se realizan
        actividades de mantenimiento;
        e) Las instrucciones para verificar, antes de realizar actividades de mantenimiento, que los dispositivos
        de protección, en su caso, estén en condiciones de funcionamiento;
        f) Las instrucciones para verificar que la puesta a tierra fija cumple con su función, o para colocar
        puestas a tierra temporales, antes de realizar actividades de mantenimiento; g) Las medidas de seguridad por aplicar, en su caso, cuando no se concluyan las actividades de
        mantenimiento de las instalaciones eléctricas en la jornada laboral, a fin de evitar lesiones al
        personal;
        h) Las instrucciones para realizar una revisión del área de trabajo donde se efectuó el mantenimiento,
        después de haber realizado los trabajos, con el objeto de asegurarse que ha quedado libre de equipo
        de trabajo, maquinaria, herramientas e implementos de protección aislante, e
        i) Las instrucciones para que al término de dicha revisión, se retiren, en su caso, los candados, señales
        o cualquier otro dispositivo utilizado para bloquear la energía y finalmente cerrar el circuito',
            'tipo' => 'Procedimientos de seguridad para realizar actividades de mantenimiento de las instalaciones
        eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => ' Los procedimientos de seguridad para el desarrollo de las actividades de mantenimiento de las
        instalaciones eléctricas, deberán contener lo siguiente:
        a) El diagrama unifilar con el cuadro general de cargas correspondiente a la zona donde se realizará el
        mantenimiento, y
        b) La autorización por escrito otorgada a los trabajadores, en su caso. ',
            'tipo' => 'Procedimientos de seguridad para realizar actividades de mantenimiento de las instalaciones
        eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3',
            'descripcion' => 'Los procedimientos para la selección y uso del equipo de trabajo, maquinaria, herramientas e
        implementos de protección aislante, deberán contemplar lo siguiente:
        a) La selección de acuerdo con las tensiones eléctricas de operación del circuito, en caso de trabajar
        con partes vivas;
        b) La forma de entregarlos a los trabajadores y/o que estén disponibles para su consulta;
        c) Las instrucciones para su uso en forma segura;
        d) Las instrucciones para su almacenamiento, transporte o reemplazo, y
        e) Las instrucciones para su revisión y mantenimiento. ',
            'tipo' => 'Procedimientos de seguridad para realizar actividades de mantenimiento de las instalaciones
        eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4',
            'descripcion' => ' El procedimiento para la colocación del sistema de puesta a tierra temporal deberá contemplar, al
        menos, que:
        a) Se empleen conductores, elementos y dispositivos específicamente diseñados para este fin y de la
        capacidad de conducción adecuada;
        b) Se conecte la puesta a tierra lo más cerca posible del lugar de trabajo y en ambas partes del mismo
        para que sea más efectiva;
        c) Se respete la secuencia para conectar y desconectar la puesta a tierra de la manera siguiente:
        1) Conexión: Se conecten los conductores de puesta a tierra al sistema de tierras y, a continuación,
        a la instalación por proteger, mediante pértigas o dispositivos especiales, tales como
        conductores de líneas, electroductos, entre otros, y
        2) Desconexión: Se proceda a la inversa, es decir, primeramente se retiren de la instalación los
        conductores de la puesta a tierra y a continuación se desconecten del electrodo de puesta a
        tierra;
        d) Se asegure que todas las cuchillas de seccionadores de puesta a tierra queden en posición de
        cerrado, cuando la puesta a tierra se hace por medio de estos equipos;
        e) Se compruebe que la puesta a tierra temporal tenga contacto eléctrico, tanto con las partes metálicas
        que se deseen poner a tierra, como con el sistema de puesta a tierra;
        f) Se impida que en el transcurso de las actividades de conexión de la puesta a tierra, el trabajador esté
        en contacto simultáneo con dos circuitos de puesta a tierra que no estén unidos eléctricamente, ya
        que éstos pueden encontrarse a potenciales diferentes;
        g) Se verifique que las partes metálicas no conductoras de máquinas, equipos y aparatos con las que
        pueda tener contacto el trabajador de manera accidental, estén puestas a tierra, especialmente las
        de tipo móvil; h) Se coloque un puente conductor puesto a tierra en la zona de trabajo antes de efectuar la
        desconexión de la puesta a tierra en servicio. El trabajador que realice esta actividad deberá estar
        aislado para evitar formar parte del circuito eléctrico, e
        i) Se suspenda el trabajo durante el tiempo de tormentas eléctricas y pruebas de líneas, cuando se
        trabaje en el sistema de tierras de una instalación',
            'tipo' => 'Procedimientos de seguridad para realizar actividades de mantenimiento de las instalaciones
        eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => ' Efectuar con personal autorizado y capacitado los trabajos de mantenimiento de las instalaciones
        eléctricas en lugares peligrosos, tales como altura, espacios confinados, subestaciones y líneas energizadas. ',
            'tipo' => '9. Medidas de seguridad generales para realizar trabajos de mantenimiento de las instalaciones
        eléctricas',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => ' Delimitar la zona de trabajo para realizar actividades de mantenimiento de las instalaciones eléctricas,
        o sus proximidades, y colocar señales de seguridad que:
        a) Indiquen a personas no autorizadas la prohibición de:
        1) Entrar a la subestación o energizar el equipo o máquinas eléctricas, y
        2) Operar, manejar o tocar los dispositivos eléctricos;
        b) Identifiquen los dispositivos de enclavamiento de uno a cuatro candados, y
        c) Definan el área en mantenimiento mediante la colocación de:
        1) Cintas, cuerdas o cadenas de plástico de color rojo o anaranjado y mosquetones para su
        enganche;
        2) Barreras extendibles de color rojo o anaranjado provistas de cuerdas en sus extremos para su
        sujeción;
        3) Banderolas;
        4) Estandartes;
        5) Distintivos de color rojo para la señalización de la zona de trabajo, o
        6) Tarjetas de libranza con información de quién realiza, quién autoriza, cuándo se inició y cuándo
        finalizará el trabajo por realizar. ',
            'tipo' => '9. Medidas de seguridad generales para realizar trabajos de mantenimiento de las instalaciones
        eléctricas',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.3',
            'descripcion' => ' Utilizar para el mantenimiento de las instalaciones eléctricas, conforme al trabajo por desarrollar,
        según aplique, equipo de trabajo, maquinaria, herramientas e implementos de protección aislante y, de ser
        necesario, uno o más de los equipos o materiales siguientes:
        a) Tarimas o alfombras aislantes;
        b) Vainas y caperuzas aislantes;
        c) Comprobadores o discriminadores de tensión eléctrica, de la clase y tensión adecuadas al sistema;
        d) Herramientas aisladas;
        e) Material de señalización, tales como discos, barreras o banderines, entre otros;
        f) Lámparas portátiles, o
        g) Transformadores de aislamiento. ',
            'tipo' => '9. Medidas de seguridad generales para realizar trabajos de mantenimiento de las instalaciones
        eléctricas',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.4',
            'descripcion' => ' Comprobar, para la realización de trabajos de mantenimiento de las instalaciones eléctricas, al menos
        que:
        a) Las instalaciones eléctricas se encuentren de conformidad con el diagrama unifilar y el plan de
        trabajo;
        b) Se evite trabajar con conductores o equipos energizados y, en caso de que sea estrictamente
        necesario, realizarlo si se cuenta con el equipo de protección personal y las herramientas o
        implementos de trabajo requeridos; ',
            'tipo' => '9. Medidas de seguridad generales para realizar trabajos de mantenimiento de las instalaciones
        eléctricas',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.5',
            'descripcion' => 'Cumplir, cuando se utilicen herramientas o lámparas portátiles en el mantenimiento de las
        instalaciones eléctricas de baja tensión, con las condiciones de seguridad siguientes:
        a) Se cuente con cables de alimentación de las herramientas o lámparas portátiles perfectamente
        aislados y en buen estado; b) Se utilicen tensiones de alimentación de 24 volts o menos, en el caso de las herramientas y lámparas
        portátiles para los trabajos en zanjas, pozos, galerías y calderas, entre otros;
        c) Se provean las lámparas portátiles con mango aislante, dispositivo protector de la bombilla y
        conductor de aislamiento de uso rudo o extra rudo, y
        d) Se cumpla con al menos una de las condiciones siguientes, en aquellos casos en que la herramienta
        portátil tenga que funcionar con una tensión eléctrica superior a los 24 volts:
        1) Usar guantes dieléctricos aislantes;
        2) Disponer de doble aislamiento en la herramienta portátil;
        3) Contar con conexión de puesta a tierra;
        4) Contar con protección de los defectos de aislamiento de la herramienta, mediante relevadores
        diferenciales, o
        5) Utilizar transformadores de aislamiento. ',
            'tipo' => '9. Medidas de seguridad generales para realizar trabajos de mantenimiento de las instalaciones
        eléctricas',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => 'En el equipo eléctrico motivo del mantenimiento se deberá cumplir, según aplique, que: a) Los interruptores estén contenidos en envolventes que imposibiliten, en cualquier caso, el contacto accidental de personas y objetos; b) Se realice la apertura y cierre de cuchillas, seccionadores, cuchillas-fusibles y otros dispositivos similares, por personal autorizado, utilizando equipo de protección personal y de seguridad, de acuerdo con los riesgos potenciales identificados.  Ejemplo del equipo de protección personal son: guantes dieléctricos, según la clase y de acuerdo con la tensión eléctrica; protección ocular; casco de seguridad; ropa de trabajo, y botas dieléctricas, entre otros, y c) Se efectúe la conexión de alguna instalación eléctrica -nueva o provisional-, o equipo a líneas o circuitos energizados, invariablemente con el circuito desenergizado. En caso de no poder desenergizar el circuito, se deberá aplicar el procedimiento para trabajos con línea energizada que para tal efecto se elabore. ',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.2',
            'descripcion' => ' En las instalaciones eléctricas se deberá verificar, según aplique, que: a) Todos los equipos destinados al uso y distribución de la energía eléctrica cuenten con información para identificar las características eléctricas y la distancia de seguridad para las tensiones eléctricas presentes, ya sea en una placa, en etiquetas adheridas o marcada sobre el equipo; b) En lugares en los que el contacto con equipos eléctricos o la proximidad de éstos pueda entrañar peligro para los trabajadores, se cuente con las señalizaciones de seguridad, conforme a lo dispuesto por la NOM-026-STPS-2008, o las que la sustituyan, para indicar los riesgos y para el uso del equipo de protección personal; c) Los elementos energizados se encuentren fuera del alcance de los trabajadores; d) Se delimite la zona de trabajo mediante la utilización, entre otros, de los medios siguientes: 1) Barreras protectoras; 2) Resguardos; 3) Cintas delimitadoras, y 4) Control de acceso; e) Se manipulen los conductores energizados con guantes dieléctricos o con herramienta aislada, diseñada para el nivel de tensión eléctrica que se maneje;',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.3',
            'descripcion' => ' En las subestaciones eléctricas se deberán adoptar, al menos, las medidas de seguridad siguientes: a) Se obtenga la autorización para realizar trabajos en la subestación; b) Se use el equipo de protección personal necesario para realizar los trabajos en la subestación; c) Se realicen las actividades de mantenimiento en la subestación eléctrica, al menos con dos trabajadores; d) Se considere que todo el equipo que se localice en la subestación eléctrica está energizado, hasta que no se compruebe la ausencia de tensión eléctrica y que esté puesto a tierra efectivamente, antes de iniciar el mantenimiento; e) Se apliquen los procedimientos de seguridad establecidos para el mantenimiento y los que se requieran, de conformidad con lo establecido en el Capítulo 8 de la presente Norma; f) Se respeten los avisos de seguridad; g) Se manejen equipos de calibración y prueba que cuenten con certificado vigente de calibración; h) Se mantengan las palancas de acción manual, puertas de acceso, gabinetes de equipo de control, entre otros, según sea el caso, con candado o con una etiqueta de seguridad que indique que están siendo operados o se está ejecutando en ellos algún trabajo; i) Se asegure que las partes vivas de la subestación eléctrica están fuera del alcance del personal o protegidas por pantallas, enrejados, rejillas u otros medios similares, y j) Se identifique la salida de emergencia y asegure que las puertas abran: 1) Hacia afuera o sean corredizas; 2) Fácilmente desde el interior, y que se encuentren libres de obstáculos, y 3) Desde el exterior únicamente con una llave especial o controlada. ',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.4',
            'descripcion' => ' En los equipos o dispositivos de las instalaciones eléctricas provisionales objeto del mantenimiento, se deberá comprobar que: a) Se apliquen las medidas de seguridad, en caso de contar con líneas energizadas sin aislar próximas a muros; b) Se revise que estén desenergizados y puestos a tierra; c) Se verifique que no existen daños en los aislamientos de los conductores; d) Cuenten los empalmes con la resistencia mecánica para mantener la continuidad del circuito, y e) Se mantenga la continuidad eléctrica en todas las soldaduras o uniones. ',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.5',
            'descripcion' => 'Para la realización de trabajos dentro del perímetro de las instalaciones eléctricas, se deberá comprobar que: a) Se conserve la distancia de seguridad que corresponda a la tensión eléctrica de la instalación, antes de efectuar cualquier maniobra de mantenimiento a los conductores o instalaciones eléctricas. Para establecer la distancia de seguridad, se deberá aplicar lo establecido en la NOM-001-SEDE-2005,  o las que la sustituyan; b) Se impida hacer maniobras de mantenimiento a una distancia menor de trabajo en un conductor o instalación eléctrica, mientras no se tenga desenergizado dicho conductor o instalación eléctrica,  o no sean aplicadas las medidas de seguridad indicadas en esta Norma, y c) Se adopten las medidas de seguridad e indiquen las instrucciones específicas para prevenir los riesgos de trabajo, cuando no sea posible desconectar un conductor o equipo de una instalación eléctrica, en cuya proximidad se vayan a efectuar maniobras de mantenimiento. Dichas medidas deberán incluir al menos lo siguiente: 1) Colocar protecciones aislantes, candados o etiquetas de seguridad en los conductores e instalaciones energizados, según corresponda, y 2) Controlar, en su caso, el desplazamiento del equipo móvil empleado para dar mantenimiento en las inmediaciones de conductores o equipos de una instalación eléctrica que no puedan ser desconectados, a fin de evitar el riesgo por contacto.',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.6',
            'descripcion' => 'Para la realización de trabajos dentro del perímetro de las instalaciones eléctricas, se deberá comprobar que: a) Se conserve la distancia de seguridad que corresponda a la tensión eléctrica de la instalación, antes de efectuar cualquier maniobra de mantenimiento a los conductores o instalaciones eléctricas. Para establecer la distancia de seguridad, se deberá aplicar lo establecido en la NOM-001-SEDE-2005,  o las que la sustituyan; b) Se impida hacer maniobras de mantenimiento a una distancia menor de trabajo en un conductor o instalación eléctrica, mientras no se tenga desenergizado dicho conductor o instalación eléctrica,  o no sean aplicadas las medidas de seguridad indicadas en esta Norma, y c) Se adopten las medidas de seguridad e indiquen las instrucciones específicas para prevenir los riesgos de trabajo, cuando no sea posible desconectar un conductor o equipo de una instalación eléctrica, en cuya proximidad se vayan a efectuar maniobras de mantenimiento. Dichas medidas deberán incluir al menos lo siguiente: 1) Colocar protecciones aislantes, candados o etiquetas de seguridad en los conductores e instalaciones energizados, según corresponda, y 2) Controlar, en su caso, el desplazamiento del equipo móvil empleado para dar mantenimiento en las inmediaciones de conductores o equipos de una instalación eléctrica que no puedan ser desconectados, a fin de evitar el riesgo por contacto.',
            'tipo' => '10. Condiciones de seguridad en el mantenimiento de las instalaciones eléctricas ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.1',
            'descripcion' => ' El plan de atención a emergencias deberá contener, al menos, lo siguiente:
        a) El responsable de implementar el plan;
        b) Los equipos o aparatos necesarios para la ejecución del plan;
        c) Los procedimientos para:
        1) La comunicación de la emergencia, junto con el directorio de los servicios de auxilio para la
        emergencia, rescate y hospitales, entre otros;
        2) La suspensión de las actividades, que incluyan las acciones inmediatas para la desconexión de
        la fuente de energía;
        3) La eliminación de los riesgos durante y después de la emergencia;
        4) El uso de los sistemas y equipo de rescate, en su caso;
        5) La atención y traslado de las víctimas a lugares de atención médica, que al menos indiquen:
        i) Las instrucciones específicas en un lugar visible, de qué hacer en caso de accidente;
        ii) Las instrucciones para retirar al lesionado del peligro inmediato; la colocación de la víctima
        en un lugar seguro; la aplicación de los primeros auxilios, en su caso; la aplicación de las
        técnicas de reanimación cardiopulmonar (RCP), y las correspondientes para llamar a los
        servicios de auxilio, y
        iii) Los hospitales o unidades médicas más próximos para trasladar a la víctima, y
        6) La reanudación de actividades, en su caso, y
        d) La capacitación y adiestramiento de los trabajadores en relación con el contenido del plan de
        atención a emergencias. ',
            'tipo' => '13. Plan de atención a emergencias ',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.1',
            'descripcion' => 'A los trabajadores que realicen el mantenimiento de las instalaciones eléctricas del centro de trabajo
        se les deberá proporcionar capacitación, adiestramiento e información, de acuerdo con las tareas asignadas y
        el plan de atención a emergencias. ',
            'tipo' => '14. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.2',
            'descripcion' => ' La capacitación de los trabajadores que realicen el mantenimiento de las instalaciones eléctricas,
        deberá considerar, al menos lo siguiente:
        a) La información sobre los riesgos de trabajo relacionados con el mantenimiento de las instalaciones
        eléctricas;
        b) La descripción general sobre los efectos en el organismo ocasionados por una descarga eléctrica o
        sus efectos, como consecuencia de un contacto, falla o aproximación a elementos energizados, con
        énfasis en las condiciones que deberán evitarse para prevenir lesiones o daños a la salud;
        c) Los procedimientos de seguridad para realizar el mantenimiento de las instalaciones eléctricas, a que
        se refiere el Capítulo 8 de la presente Norma;
        d) Las medidas de seguridad establecidas en esta Norma, aplicables a las actividades por realizar, y
        que se deberán adoptar en la ejecución de las actividades o trabajos de mantenimiento de las
        instalaciones eléctricas;
        e) El uso, mantenimiento, conservación, almacenamiento y reposición del equipo de protección
        personal, de acuerdo con lo establecido en la NOM-017-STPS-2008, o las que la sustituyan;
        f) Los temas teórico-prácticos sobre la forma segura de manejar, dar mantenimiento, revisar y
        almacenar la maquinaria, equipo, herramientas, materiales e implementos de trabajo; g) Las condiciones bajo las cuales la maquinaria, equipo, herramientas, materiales e implementos de
        trabajo deberán ser puestos fuera de servicio para su reparación o reemplazo;
        h) Las condiciones climáticas u otros factores desfavorables que obligarían a interrumpir los trabajos, e
        i) El contenido del plan de atención a emergencias y otras acciones que se desprendan de las
        situaciones de emergencia, que pudieran presentarse durante la realización de los trabajos de
        mantenimiento de las instalaciones eléctricas',
            'tipo' => '14. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 2,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-017
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-017-STPS-2008',
            'titulo' => 'Equipo de protección personal-Selección, uso y manejo en los
        centros de trabajo. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-017.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Identificar y analizar los riesgos de trabajo a los que están expuestos los trabajadores por cada puesto
        de trabajo y área del centro laboral. Esta información debe registrarse y conservarse actualizada mientras no
        se modifiquen los implementos y procesos de trabajo, con al menos los siguientes datos: tipo de actividad que
        desarrolla el trabajador, tipo de riesgo de trabajo identificado, región anatómica por proteger, puesto de trabajo
        y equipo de protección personal requerido.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Determinar el equipo de protección personal, que deben utilizar los trabajadores en función de los
        riesgos de trabajo a los que puedan estar expuestos por las actividades que desarrollan o por las áreas en
        donde se encuentran. En caso de que en el análisis de riesgo se establezca la necesidad de utilizar ropa de
        trabajo con características de protección, ésta será considerada equipo de protección personal. El patrón puede hacer uso de las tablas contenidas en la guía de referencia de la presente Norma para
        determinar el equipo de protección personal para los trabajadores y para los visitantes que ingresen a las
        áreas donde existan señales de uso obligatorio del equipo de protección personal específico.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Proporcionar a los trabajadores equipo de protección personal que cumpla con las siguientes
        condiciones:
        a) Que atenúe la exposición del trabajador con los agentes de riesgo;
        b) Que en su caso, sea de uso personal;
        c) Que esté acorde a las características físicas de los trabajadores, y
        d) Que cuente con las indicaciones, las instrucciones o los procedimientos del fabricante para su uso,
        revisión, reposición, limpieza, limitaciones, mantenimiento, resguardo y disposición final.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'Comunicar a los trabajadores los riesgos de trabajo a los que están expuestos, por puesto de trabajo o
        área del centro laboral, con base a la identificación y análisis de riesgos a los que se refiere el apartado 5.2. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5.1',
            'descripcion' => 'Comunicar al contratista los riesgos y las reglas de seguridad del área en donde desarrollará sus
        actividades. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5.2',
            'descripcion' => 'Los contratistas deben dar seguimiento a sus trabajadores para que porten el equipo de protección
        personal y cumpla con las condiciones de la presente norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => ' Proporcionar a los trabajadores la capacitación y adiestramiento para el uso, revisión, reposición,
        limpieza, limitaciones, mantenimiento, resguardo y disposición final del equipo de protección personal, con
        base en las indicaciones, instrucciones o procedimientos que elabore el fabricante de tal equipo de protección
        personal. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Supervisar que durante la jornada de trabajo, los trabajadores utilicen el equipo de protección personal
        proporcionado, con base a la capacitación y adiestramiento proporcionados previamente. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => ' Identificar y señalar las áreas del centro de trabajo en donde se requiera el uso obligatorio de equipo
        de protección personal. La señalización debe cumplir con lo establecido en la NOM-026-STPS-1998.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => 'Las indicaciones, instrucciones o procedimientos que el patrón proporcione a los trabajadores para el
        uso, revisión, reposición, limpieza, limitaciones, mantenimiento, resguardo y disposición final del equipo de
        protección personal, según aplique, deben al menos:
        a) Basarse en la información proporcionada por el proveedor, distribuidor o fabricante del equipo, y en
        la que el patrón considere conveniente adicionar;
        b) En su caso, contar con instrucciones para verificar su correcto funcionamiento;
        c) Identificar las limitaciones del equipo de protección personal e incluir la información sobre la
        capacidad o grado de protección que éste ofrece;
        d) Incluir la información que describa en qué condiciones no proporciona protección o donde no se debe
        usar;
        e) Considerar el tiempo de vida útil que el fabricante recomiende y las fallas o deterioros que el
        trabajador identifique, de tal forma que impida su óptimo funcionamiento;
        f) Considerar las medidas técnicas o administrativas que se deben adoptar para minimizar los efectos
        que generen o produzcan alguna respuesta o reacción adversa en el trabajador; g) Incluir las acciones que se deben realizar antes, durante y después de su uso, para comprobar que
        continúa proporcionando la protección para la cual fue diseñado;
        h) Indicar que cuando el trabajador esté en contacto con posibles agentes infecciosos, el EPP que
        utilice debe ser para ese uso exclusivo;
        i) Establecer el procedimiento para la descontaminación o desinfección del EPP, cuando aplique,
        después de cada jornada de uso, de acuerdo con las instrucciones o recomendaciones del
        fabricante;
        j) Prever que si el EPP se limpia en el centro de trabajo, ya sea por el trabajador usuario o por alguna
        otra persona designada por el patrón, se consideren las sustancias, condiciones o aditamentos para
        esta actividad;
        k) Establecer el mecanismo a seguir para reemplazarse o repararse inmediatamente cuando derivado
        de su revisión muestren algún deterioro, que impidan su óptimo funcionamiento;
        l) Indicar que el reemplazo en sus partes dañadas, debe realizarse con refacciones de acuerdo a las
        recomendaciones del fabricante o proveedor;
        m) Precisar lugares y formas de almacenarse en recipientes o contenedores especiales, si así lo
        establecen las recomendaciones del fabricante o proveedor para que no presenten daños o mal
        funcionamiento después de su uso, y
        n) Establecer las medidas de seguridad para tratarlo como residuo sólido, de conformidad con un
        procedimiento que para tal efecto se establezca, cuando quede contaminado con sustancias
        químicas peligrosas y no sea posible su descontaminación, o se determine que ya no cumple con su
        función de protección. ',
            'tipo' => '7. Indicaciones, instrucciones o procedimientos para el uso, revisión, reposición, limpieza,
        limitaciones, mantenimiento, resguardo y disposición final del equipo de protección personal ',
            'frecuencia' => ' ',
            'norm_id' => 3,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-011
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-011-STPS-2001',
            'titulo' => ' Condiciones de seguridad e higiene en los centros de trabajo donde se genere ruido. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-011.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Contar con el reconocimiento y evaluación de todas las áreas del centro de trabajo donde haya
        trabajadores y cuyo NSA sea igual o superior a 80 dB(A), incluyendo sus características y componentes de
        frecuencia, conforme a lo establecido en los apéndices B y C. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Verificar que ningún trabajador se exponga a niveles de ruido mayores a los límites máximos permisibles de exposición a ruido establecidos en el Apéndice A. En ningún caso, debe haber exposición sin equipo de protección personal auditiva a más de 105 dB(A). ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Proporcionar el equipo de protección personal auditiva, de acuerdo a lo establecido en la NOM-017-
        STPS-1993, a todos los trabajadores expuestos a NSA igual o superior a 85 dB(A).s',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'El programa de conservación de la audición aplica en las áreas del centro de trabajo donde se
        encuentren trabajadores expuestos a niveles de 85 dB(A) y mayores. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => ' Implantar, conservar y mantener actualizado el programa de conservación de la audición, necesario
        para el control y prevención de las alteraciones de la salud de los trabajadores, según lo establecido en el
        capítulo 8. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Vigilar la salud de los trabajadores expuestos a ruido e informar a cada trabajador sus resultados. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Informar a los trabajadores y a la comisión de seguridad e higiene del centro de trabajo, de las
        posibles alteraciones a la salud por la exposición a ruido, y orientarlos sobre la forma de evitarlas o atenuarlas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Cálculo para el tiempo de exposición. Cuando el NER en los centros de trabajo, esté entre dos de las
        magnitudes consignadas en la Tabla A.1, (90 y 105 dB A ), el tiempo máximo permisible de exposición',
            'tipo' => '7. Límites máximos permisibles de exposición a ruido ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => 'Cuando el NER sea superior a 105 dB(A) se deben implementar una o más de las medidas de control
        descritas en el inciso a) del Apartado 8.7.1. ',
            'tipo' => '7. Límites máximos permisibles de exposición a ruido ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' El programa de conservación de la audición debe incluir los elementos siguientes:
        a) evaluación del NSA promedio o del NSCEA,T y la determinación del NER;
        b) evaluación del NPA en bandas de octava;
        c) equipo de protección personal auditiva;
        d) capacitación y adiestramiento;
        e) vigilancia a la salud;
        f) control;
        g) documentación correspondiente a cada uno de los elementos indicados. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => ' Evaluación del NSA promedio o del NSCEA,t y la determinación del NER. Los requisitos de la
        evaluación del NSA promedio o del NSCEA,T deben cumplir con lo establecido en el Apéndice B y conforme al
        esquema siguiente: ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.1',
            'descripcion' => 'Reconocimiento:
        a) identificar las áreas y fuentes emisoras, usando durante el recorrido un sonómetro para conocer el
        NSA instantáneo;
        b) identificar a los trabajadores con exposición potencial a ruido;
        c) seleccionar el método para efectuar la evaluación de la exposición a ruido en las áreas de trabajo;
        d) determinar la instrumentación de acuerdo al método seleccionado para efectuar la evaluación de la
        exposición a ruido en las áreas de trabajo. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.2',
            'descripcion' => 'Evaluación:
        a) emplear los métodos de evaluación e instrumentos de medición establecidos en el Apéndice B;
        b) determinar los NER, aplicando cualquiera de los métodos establecidos en el Apéndice B;
        c) asentar los resultados en la documentación del programa de conservación de la audición;
        d) cuando las exposiciones a ruido igualen o excedan el NER de 80 dB(A), el reconocimiento y
        evaluación del NER se repetirá cada dos años o dentro de los noventa días posteriores a un cambio
        de producción, procesos, equipos, controles u otros cambios, que puedan ocasionar variaciones en
        los resultados del estudio anterior. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3',
            'descripcion' => 'Evaluación del NPA en bandas de octava.',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3.1',
            'descripcion' => ' La evaluación de los NPA debe cumplir con lo establecido en el Apéndice C y conforme al esquema
        siguiente: ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4',
            'descripcion' => 'Equipo de protección personal auditiva.',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4.1',
            'descripcion' => 'Cuando se utilice equipo de protección personal auditiva, se debe considerar el factor de reducción
        R o nivel de ruido efectivo en ponderación A (NRE) que proporcione dicho equipo, mismo que debe contar con
        la debida certificación. En caso de no existir un organismo de certificación el fabricante o proveedor debe
        expedir la garantía del equipo de protección personal estableciendo el nivel de atenuación de ruido. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4.2',
            'descripcion' => 'Para determinar el factor de reducción R o el NRE, se debe utilizar cualquiera de los métodos
        establecidos en el Apéndice D. 
        ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4.3',
            'descripcion' => 'Contar con los procedimientos siguientes:
        a) de selección técnica y médica;
        b) de capacitación de los trabajadores en su uso, mantenimiento, limpieza, cuidado, reemplazo y
        limitaciones;
        c) de supervisión de su uso por parte de los trabajadores. ',
        'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4.4',
            'descripcion' => ' Toda persona que ingrese a las áreas con señalamientos de uso obligatorio de equipo de protección
        personal auditiva deberá ingresar con dicho equipo. ',
        'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5',
            'descripcion' => ' Capacitación y adiestramiento.',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5.1',
            'descripcion' => '. Los trabajadores expuestos a NER iguales o superiores a 80 dB(A) deben ser instruidos respecto a
        las medidas de control, mediante un programa de capacitación acerca de los efectos a la salud, niveles
        máximos permisibles de exposición, medidas de protección y de exámenes audiométricos y sitios de trabajo
        que presenten condiciones críticas de exposición. ',
        'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5.2',
            'descripcion' => 'La información proporcionada en el programa de capacitación debe ser actualizada, incluyendo
        prácticas de trabajo y del uso, cuidado, mantenimiento, limpieza, reemplazo y limitaciones de los equipos de
        protección auditiva. ',
        'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.6',
            'descripcion' => 'Vigilancia a la salud.
        El patrón debe llevar a cabo exámenes médicos anuales específicos a cada trabajador expuesto a niveles
        de ruido de 85 dB(A) y mayores, según lo que establezcan las normas oficiales mexicanas que al respecto
        emita la Secretaría de Salud y observar las medidas que en esas normas se establezcan. En caso de no
        existir normatividad de la Secretaría de Salud, el médico de empresa determinará el tipo de exámenes
        médicos que se realizarán, su periodicidad y las medidas a aplicar, tomando en cuenta la susceptibilidad del
        trabajador. Se podrá usar la Guía de Referencia I, no obligatoria. ',
        'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.7',
            'descripcion' => 'Control. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.7.1',
            'descripcion' => ' Cuando el NER supere los límites máximos permisibles de exposición establecidos en la Tabla A.1,
        se deben aplicar una o varias de las medidas de control siguientes, para mantener la exposición dentro de lo
        permisible:
        a) medidas técnicas de control, consistentes en:
        1) efectuar labores de mantenimiento preventivo y correctivo de las fuentes generadoras de ruido;
        2) sustitución o modificación de equipos o procesos;
        3) reducción de las fuerzas generadoras del ruido;
        4) modificar los componentes de frecuencia con mayor posibilidad de daño a la salud de los
        trabajadores;
        5) distribución planificada y adecuada, del equipo en la planta;
        6) acondicionamiento acústico de las superficies interiores de los recintos;
        7) instalación de cabinas, envolventes o barreras totales o parciales, interpuestas entre las fuentes
        sonoras y los receptores;
        8) tratamiento de las trayectorias de propagación del ruido y de las vibraciones, por aislamientos
        de las máquinas y elementos;
        b) Implementar medidas administrativas de control, como:
        1) manejo de los tiempos de exposición;
        2) programación de la producción;
        3) otros métodos administrativos. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.7.2',
            'descripcion' => ' Las medidas de control que se adopten deben de estar sustentadas por escrito, en un análisis
        técnico para su implementación, así como en una evaluación que se practique dentro de los 30 días
        posteriores a su aplicación, para verificar su efectividad. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.7.3',
            'descripcion' => 'Se debe tener especial cuidado de que las medidas de control que se adopten no produzcan nuevos
        riesgos a los trabajadores. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.7.4',
            'descripcion' => ' En la entrada de las áreas donde los NSA sean iguales o superiores a 85 dB(A), deben colocarse
        señalamientos de uso obligatorio de equipo de protección personal auditiva, según lo establecido en la NOM026-STPS-1998.',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.8',
            'descripcion' => 'Documentación del programa de conservación de la audición. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.8.1',
            'descripcion' => ' El patrón debe conservar la documentación del programa de conservación de la audición, con la
        información registrada durante los últimos 5 años. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.8.2',
            'descripcion' => 'El patrón debe elaborar un cronograma de actividades para el desarrollo de la implementación del
        programa de conservación de la audición. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.8.3',
            'descripcion' => ' La documentación del programa de conservación de la audición debe contener los siguientes
        registros:
        a) los estudios de reconocimiento, evaluación y determinación de los NSA, NSCEA,T, NER y NPA,
        conforme a lo establecido en los apartados B.7 y C.7;
        b) equipo de protección auditiva, conforme a lo señalado en el Apartado 8.4.3;
        c) programa de capacitación y adiestramiento, según los establecido en el Apartado 8.5;
        d) vigilancia a la salud conforme al Apartado 8.6;
        e) medidas técnicas y administrativas de control adoptadas, incluyendo los estudios solicitados en el
        Apartado 8.7.2; f) conclusiones;
        g) los documentos que amparen el cumplimiento de los apartados 5.2 y 5.7. ',
            'tipo' => 'Programa de conservación de la audición ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => 'Los centros de trabajo de nueva creación deben ser planeados, instalados, organizados y puestos en
        funcionamiento de modo que la exposición a ruido de los trabajadores no exceda los límites máximos
        permisibles de exposición, establecidos en el Apéndice A. ',
            'tipo' => '9. Centros de trabajo de nueva creación o modificación de procesos en los centros de trabajo existentes ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => ' Cualquier modificación a un proceso en un centro de trabajo debe ser planeada, instalada, organizada
        y puesta en funcionamiento de modo que la exposición a ruido de los trabajadores no exceda los límites
        máximos permisibles de exposición establecidos en el Apéndice A. ',
            'tipo' => '9. Centros de trabajo de nueva creación o modificación de procesos en los centros de trabajo existentes ',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.3',
            'tipo' => '9. Centros de trabajo de nueva creación o modificación de procesos en los centros de trabajo existentes ',
            'descripcion' => ' Para dar cumplimiento a los Apartados 9.1 y 9.2, las medidas de control deben estar sustentadas por
        escrito, con un análisis técnico para su implantación y en una evaluación posterior para verificar su efectividad.',
            'frecuencia' => ' ',
            'norm_id' => 4,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-027
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-027-STPS-2008',
            'titulo' => 'Actividades de soldadura y corte-Condiciones de seguridad e higiene. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-027.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Contar con el análisis de riesgos potenciales para las actividades de soldadura y corte que se
        desarrollen en el centro de trabajo, de acuerdo a lo establecido en el Capítulo 7 y adoptar las condiciones de
        seguridad e higiene correspondientes, de conformidad con lo que establece el Capítulo 8. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Informar a los trabajadores que realicen actividades de soldadura y corte sobre los riesgos a los que se
        exponen, a través de carteles, folletos, guías o de forma verbal; la información debe darse por lo menos dos
        veces al año y llevar un registro que contenga al menos, nombre y firma de los trabajadores que recibieron la
        información, así como la fecha, tema y nombre de la persona que la proporcionó. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Contar con el programa para las actividades de soldadura y corte de conformidad con lo que se
        establece en el apartado 9.1 de la presente Norma. Adicionalmente, debe incluir los procedimientos y
        controles específicos establecidos en el apartado 9.2, en caso de contar con áreas de trabajo, espacios
        confinados, procesos (provisionales o en caso de mantenimiento) o recipientes donde existan polvos, gases o
        vapores inflamables o explosivos que representen peligro para los trabajadores. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5 ,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'Contar con el programa para las actividades de soldadura y corte de conformidad con lo que se
        establece en el apartado 9.1 de la presente Norma. Adicionalmente, debe incluir los procedimientos y
        controles específicos establecidos en el apartado 9.2, en caso de contar con áreas de trabajo, espacios
        confinados, procesos (provisionales o en caso de mantenimiento) o recipientes donde existan polvos, gases o
        vapores inflamables o explosivos que representen peligro para los trabajadores. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => 'Capacitar y adiestrar al menos una vez por año a los trabajadores que desarrollan actividades de
        soldadura y corte, y al supervisor que vigila la aplicación de los procedimientos de seguridad, tomando como
        base los procedimientos de seguridad e higiene incluidos en el programa de soldadura y corte a que se refiere
        el Capítulo 9 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Establecer controles específicos para las actividades de soldadura y corte que se realicen en recipientes, espacios confinados o subterráneos y en donde existan polvos, gases o vapores inflamables o explosivos que representen peligro para los trabajadores, de conformidad con el apartado 9.2.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Autorizar por escrito a los trabajadores que realicen actividades de soldadura y corte en áreas de
        riesgo como: áreas controladas con presencia de sustancias inflamables o explosivas, espacios confinados,
        alturas, sótanos, subterráneos, y aquéllas no designadas específicamente para estas actividades. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Supervisar que las actividades de soldadura y corte en lugares peligrosos (alturas, espacios confinados, sótanos, subterráneos, áreas controladas con presencia de sustancias inflamables o explosivas, otros) se realicen en condiciones de seguridad e higiene',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => ' Capacitar y adiestrar, al menos una vez por año, al personal asignado para realizar las actividades de
        rescate de trabajadores accidentados en alturas, subterráneos o espacios confinados con base en los
        procedimientos establecidos en el Capítulo 11.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.12',
            'descripcion' => 'Contar con materiales y equipo para realizar el rescate de los trabajadores accidentados en alturas, subterráneos o espacios confinados. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.13',
            'descripcion' => 'Capacitar, adiestrar y autorizar a los trabajadores para dar el mantenimiento preventivo y, en su caso,
        correctivo, al equipo y maquinaria utilizada en las actividades de soldadura y corte del centro de trabajo. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.14',
            'descripcion' => 'Proporcionar a los trabajadores el equipo de protección personal considerado en el Capítulo 8, inciso
        c), y el que se determine con base en el análisis de riesgos potenciales, y capacitarlos sobre su uso,
        mantenimiento y reemplazo. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.15',
            'descripcion' => ' Someter a exámenes médicos específicos a los trabajadores que realicen actividades de soldadura y
        corte, según lo establezcan las normas oficiales mexicanas que al respecto emita la Secretaría de Salud. En
        caso de no existir normatividad de la Secretaría de Salud, el médico de la empresa determinará el contenido
        de los exámenes médicos que se realizarán con una periodicidad de al menos una vez cada doce meses, y la
        vigilancia a la salud que se deba aplicar, mismos que quedarán asentados en el expediente médico que, para
        tal efecto, se tenga del trabajador',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.16',
            'descripcion' => 'Contar con los procedimientos que permitan brindar la atención a un posible accidentado durante las
        actividades de soldadura y corte. Cuando asigne personal para proporcionar los primeros auxilios, debe
        capacitarlo y adiestrarlo en esta materia, al menos una vez por año.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.17',
            'descripcion' => ' Contar con un botiquín de primeros auxilios en el área donde se desarrollen actividades de soldadura y corte, en el que se deben incluir los materiales que se requieran de conformidad con el análisis de riesgos potenciales. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.18',
            'descripcion' => 'Vigilar que el personal externo contratado para realizar las actividades de soldadura y corte en el centro de trabajo, cumpla con lo establecido en el Capítulo 5 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8',
            'descripcion' => 'a) Contar con un extintor tipo ABC que sea de la capacidad acorde al análisis de riesgos potenciales, en un radio no mayor a 7 metros, en el área donde se desarrollen las actividades de soldadura y corte; b) Contar con casetas de soldar o con mamparas para delimitar las áreas en donde se realicen actividades de soldadura o corte; c) Utilizar, al menos, el siguiente equipo de protección personal conforme al proceso de soldadura o corte que se emplee: caretas o lentes con sombra de soldador, protección facial, capuchas (monjas), respirador para humos, peto (mandil), guantes para soldador, polainas, mangas y zapatos de seguridad; d) Revisar que los equipos y elementos de seguridad acoplados a los cilindros que contengan gases combustibles estén en condiciones de funcionamiento. Los resultados de la revisión se deben registrar en una bitácora donde se precise el número de serie, lote, marca y modelo de los equipos y elementos de acoplamiento, así como el estado que presentan en lo que se refiere a su hermeticidad y limpieza (libre de grasa); e) Prohibir la utilización de reguladores de presión reconstruidos; f) Aplicar los procedimientos de seguridad que incluyan las medidas necesarias para impedir daños al personal expuesto y las acciones que se deben aplicar antes, durante y después en los equipos o áreas donde se realizarán las actividades de soldadura y corte; g) Colocar señales, avisos, candados o etiquetas de seguridad, de acuerdo a lo establecido en la  NOM-004-STPS-1999 y en la NOM-026-STPS-1998, en las instalaciones eléctricas que proporcionen energía a los equipos de soldadura y corte, y restringir el paso a las áreas en las que se realizan las actividades de soldadura y corte, y h) Contar con ventilación natural o artificial antes y durante las actividades de soldadura y corte en las áreas de trabajo.',
            'tipo' => '8. Condiciones de seguridad e higiene durante las actividades de soldadura y corte ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => ' Se debe contar con un programa de actividades de soldadura y corte que al menos incluya:
        a) Actividad de soldadura y corte (permanente o temporal);
        b) Procedimiento de soldadura y corte;
        c) Tipo de riesgo;
        d) Procedimiento de seguridad;
        e) Procedimiento de autorización y persona(s) que autoriza(n), según sea el caso;
        f) Fecha de autorización;
        g) Duración o periodo;
        h) Area de trabajo, y
        i) Nombre del personal que supervisará al trabajador que realizará las actividades de soldadura y corte
        conforme a los procedimientos establecidos',
            'tipo' => '9. Requisitos del programa de actividades de soldadura y corte ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => 'Para todas aquellas áreas de trabajo, espacios confinados, subterráneos, procesos (provisionales o en
        caso de mantenimiento) o recipientes donde existan polvos, gases o vapores inflamables o explosivos que
        representen peligro para los trabajadores, el programa de actividades de soldadura y corte debe incluir
        además los siguientes procedimientos y controles específicos:
        a) Procedimiento para detectar atmósferas explosivas, irritantes o no respirables, cuando aplique;
        b) Controles específicos para evitar atmósferas explosivas o no respirables, y
        c) Procedimiento de rescate.',
            'tipo' => '8. Condiciones de seguridad e higiene durante las actividades de soldadura y corte ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => ' En las actividades de soldadura y corte con:
        a) La descripción de las actividades a desarrollar;
        b) Las instrucciones concretas sobre el trabajo. Para elaborar las instrucciones se puede tomar de
        referencia el contenido de la guía de referencia II;
        c) El número de trabajadores que se requieren para realizar los trabajos;
        d) La identificación de aquellas actividades de soldadura y corte que se realicen en áreas,
        contenedores, recipientes o espacios confinados donde existan polvos, líquidos, gases o vapores
        inflamables o explosivos que representen una condición de riesgo para los trabajadores, y
        e) Para los casos donde existan trabajos en alturas, subterráneos, sótanos y espacios confinados, la
        indicación para aplicar los procedimientos de rescate conforme al Capítulo 11. ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.2',
            'descripcion' => 'En el equipo y maquinaria, según aplique:
        a) Indicaciones para verificar que:
        1) Las conexiones de mangueras no presenten fugas, los conectores no presenten corrosión y
        estén acoplados herméticamente;
        2) Las conexiones eléctricas mantengan la continuidad, no presenten daños mecánicos en sus
        aislamientos y se encuentren en condiciones de uso;
        3) El equipo o maquinaria esté conectado al sistema de puesta a tierra general o a un sistema
        alterno que cumpla las especificaciones de la NOM-022-STPS-1999, y esté en condiciones de
        funcionamiento, y
        4) El voltaje de la línea de alimentación corresponda al requerido por la máquina de soldar;
        b) Que el equipo que utiliza gases combustibles no presente fugas;
        c) Que se cuente con el instructivo para el almacenamiento, uso y transporte de cilindros con gases
        combustibles en el interior y exterior de las instalaciones del centro de trabajo;
        d) Que se cuente con el instructivo para la revisión y reemplazo de piezas de consumo de los equipos
        utilizados en el proceso de soldadura y corte;
        e) Que el mantenimiento correctivo del equipo lo realice personal capacitado y autorizado por el patrón;
        f) Que se establezcan los procedimientos para el manejo y operación de cilindros, válvulas,
        reguladores, mangueras y sus conexiones, fuentes de alimentación eléctrica y operaciones o
        actividades de soldadura y corte en espacios confinados;
        g) Que se seleccionen las herramientas y el equipo de protección personal según sea el proceso de
        soldadura y maquinaria a utilizar, y
        h) Que se realicen revisiones mensuales al equipo de soldadura y corte para determinar su
        funcionalidad y mantenimiento que corresponda. ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.3',
            'descripcion' => ' En las áreas o instalaciones, según aplique:
        a) Que se coloquen señales, avisos de seguridad o barreras de protección como pantallas, casetas
        para soldar, candados, mamparas o cualquier otro dispositivo cuando se realizan actividades de
        soldadura y corte, con objeto de delimitar o restringir el área de trabajo, y
        b) Que se verifique que el área de trabajo sea ventilada por medios naturales o artificiales y la
        inexistencia de materiales combustibles en un radio no menor a 10 metros. ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.4',
            'descripcion' => 'En caso de fuga de gases combustibles, en el proceso de soldadura y corte, se debe cumplir con lo
        siguiente:
        a) Contar y utilizar el equipo de protección personal recomendado en el análisis de riesgos para esta
        emergencia;
        b) Contar con las instrucciones concretas para controlar la fuga y aplicar el procedimiento de seguridad
        para controlar los riesgos; c) Tener disponibles el equipo y materiales que se deben emplear para controlar la fuga, y
        d) Designar a un supervisor que vigile el contenedor dañado o averiado en la zona, hasta que se libere
        la presión del cilindro o se controle la situación, con el fin de asegurarse que no se produzca fuego o
        se salga de control; que notifique al proveedor de manera verbal y escrita sobre el estado actual, e
        identifique el recipiente dañado. ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.5',
            'descripcion' => ' Las actividades de soldadura y corte en espacios confinados deben contener las indicaciones para
        que:
        a) El supervisor evalúe el interior del espacio confinado antes de entrar, durante y al terminar la
        actividad de soldadura y corte, para verificar que el contenido de oxígeno en el aire esté en el rango
        de 19.5% y 23.5%;
        b) Se evalúe la presencia de atmósferas explosivas a través de equipos de lectura directa;
        c) Se determinen los tipos de sustancias químicas almacenadas y aplique el procedimiento de
        descontaminación del espacio confinado;
        d) El trabajador cuente con la autorización por escrito del patrón antes de ingresar al área;
        e) El trabajador coloque tarjetas de seguridad que indiquen el bloqueo de energía de alimentación,
        maquinaria y equipo que se relacione con el recipiente y espacio confinado donde se realizará la
        actividad de soldadura o corte;
        f) Se proceda a ventilar y efectuar los monitoreos con equipos de lectura directa para corroborar los
        niveles de concentración de oxígeno en aire y la ausencia de una atmósfera explosiva, en caso de no
        alcanzar los niveles de oxígeno establecidos en el inciso a), se podrá utilizar el equipo de protección
        respiratoria con suministro de aire respirable;
        g) Se utilicen equipos de extracción local para la eliminación de gases, vapores y humos peligrosos;
        h) El responsable del mantenimiento compruebe que el sistema de ventilación artificial se encuentre en
        condiciones de funcionamiento y opere bajo un programa de mantenimiento;
        i) Se coloquen fuera del espacio confinado los cilindros y las fuentes de poder;
        j) Se controle el tiempo de permanencia continua del trabajador dentro de un espacio confinado a una
        hora de trabajo continuo como máximo, con descansos mínimos de 15 minutos fuera del espacio
        confinado;
        k) Se eliminen o reduzcan al mínimo las atmósferas explosivas en los espacios confinados que hayan
        contenido líquidos inflamables u otro tipo de combustibles, antes de proceder a soldar o cortar;
        l) El supervisor vigile que se apliquen los procedimientos de seguridad establecidos, desde el ingreso
        del trabajador hasta el término de la operación;
        m) El soldador durante la operación utilice un arnés con una línea de vida. Las cuerdas de la línea de
        vida deben ser resistentes a las sustancias químicas presentes y con longitud suficiente para poder
        maniobrar dentro del área, y ser utilizada para rescatarlo en caso de ser necesario, y
        n) Se realice una limpieza e inspección para detectar y controlar los posibles riesgos, después de toda
        jornada de trabajo. ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.6',
            'descripcion' => 'El procedimiento de autorización para los trabajadores que realicen actividades de soldadura y corte
        en alturas, sótanos y espacios confinados, áreas controladas con presencia de sustancias químicas o
        explosivas y aquéllas no designadas específicamente para estas actividades, debe cumplir con lo siguiente:
        a) Ser otorgada por escrito;
        b) Incluir:
        1) La descripción de la actividad, el nombre y firma del trabajador que realizará la actividad, el lugar
        en donde se realizará la actividad, además de la hora y fecha programadas para el inicio y
        terminación de la actividad; 2) El nombre y firma del responsable del área o persona que autoriza, el lugar donde se realizará la
        actividad, el nombre y puesto de quien vigilará esta actividad, el nombre y firma de enterado del
        responsable de mantenimiento, el tipo de inspección y la indicación para anexar a la autorización
        el procedimiento de seguridad para realizar la actividad;
        3) La instrucción de entregar copias de la autorización a todos los que firman. La copia del
        trabajador se debe colocar en un lugar visible durante la realización del trabajo y la copia del
        responsable de la autorización la debe conservar el patrón, al menos, durante un año, y
        4) La verificación de que el personal designado supervisó que se cuenta con ventilación
        permanente o con extracción de gases y humos, ya sea natural o artificial, antes y durante la
        realización de las actividades de soldadura y corte;
        c) El listado de las posibles condiciones peligrosas y las medidas de protección requeridas, así como el
        equipo de protección personal a utilizar, y
        d) La obligación de realizar el monitoreo para detectar atmósferas explosivas, irritantes, tóxicas o
        deficientes de oxígeno.  ',
            'tipo' => '10. Requisitos de los procedimientos de seguridad ',
            'frecuencia' => ' ',
            'norm_id' => 5,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-04
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-004-STPS-1999',
            'titulo' => 'Sistemas de protección y dispositivos de seguridad en la maquinaria y equipo que se utilice en los centros de trabajo. ',
            'direccion' => '',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Elaborar un estudio para analizar el riesgo potencial generado por la maquinaria y equipo en el que se debe hacer un inventario de todos los factores y condiciones peligrosas que afecten a la salud del trabajador. ',
            'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2.1',
            'descripcion' => 'En la elaboración del estudio de riesgo potencial se debe analizar: a) las partes en movimiento, generación de calor y electricidad estática de la maquinaria y equipo; b) las superficies cortantes, proyección y calentamiento de la materia prima, subproducto y producto terminado; c) el manejo y condiciones de la herramienta',
            'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2.2',
            'descripcion' => ' Para todo riesgo que se haya detectado, se debe determinar: a) el tipo de daño; b) la gravedad del daño; c) la probabilidad de ocurrencia. ',
            'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'En base al estudio para analizar el riesgo potencial, el patrón debe: a) elaborar el Programa Específico de Seguridad e Higiene para la Operación y Mantenimiento de la Maquinaria y Equipo, darlo a conocer a los trabajadores y asegurarse de su cumplimiento; b) contar con personal capacitado y un manual de primeros auxilios en el que se definan los procedimientos para la atención de emergencias. Se puede tomar como referencia la guía no obligatoria de la Norma Oficial Mexicana NOM-005-STPS-1998; c) señalar las áreas de tránsito y de operación de acuerdo a lo establecido en las NOM-001-STPS1993 y NOM-026-STPS-1998; d) dotar a los trabajadores del equipo de protección personal de acuerdo a lo establecido en la NOM017-STPS-1993. ',
            'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'En base al estudio para analizar el riesgo potencial, el patrón debe: a) elaborar el Programa Específico de Seguridad e Higiene para la Operación y Mantenimiento de la Maquinaria y Equipo, darlo a conocer a los trabajadores y asegurarse de su cumplimiento; b) contar con personal capacitado y un manual de primeros auxilios en el que se definan los procedimientos para la atención de emergencias. Se puede tomar como referencia la guía no obligatoria de la Norma Oficial Mexicana NOM-005-STPS-1998; c) señalar las áreas de tránsito y de operación de acuerdo a lo establecido en las NOM-001-STPS1993 y NOM-026-STPS-1998; d) dotar a los trabajadores del equipo de protección personal de acuerdo a lo establecido en la NOM017-STPS-1993. ',
            'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => 'Operación de la maquinaria y equipo. ',
            'tipo' => '7. Programa Específico de Seguridad para la Operación y Mantenimiento de la Maquinaria y Equip',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Mantenimiento de la maquinaria y equipo ',
            'tipo' => '7. Programa Específico de Seguridad para la Operación y Mantenimiento de la Maquinaria y Equip',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.1',
            'descripcion' => 'La capacitación que se debe otorgar a los trabajadores que realicen las actividades de mantenimiento. ',
            'tipo' => '7. Programa Específico de Seguridad para la Operación y Mantenimiento de la Maquinaria y Equip',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.2',
            'descripcion' => ' La periodicidad y el procedimiento para realizar el mantenimiento preventivo y, en su caso, el correctivo, a fin de garantizar que todos los componentes de la maquinaria y equipo estén en condiciones seguras de operación, y se debe cumplir, al menos, con las siguientes condiciones: a) al concluir el mantenimiento, los protectores y dispositivos deben estar en su lugar y en condiciones de funcionamiento; b) cuando se modifique o reconstruya una maquinaria o equipo, se deben preservar las condiciones de seguridad; c) el bloqueo de energía se realizará antes y durante el mantenimiento de la maquinaria y equipo, cumpliendo además con lo siguiente: 1) deberá realizarse por el encargado del mantenimiento; 2) deberá avisarse previamente a los trabajadores involucrados, cuando se realice el bloqueo de energía; 3) identificar los interruptores, válvulas y puntos que requieran inmovilización; 4) bloquear la energía en tableros, controles o equipos, a fin de desenergizar, desactivar o impedir la operación de la maquinaria y equipo; 5) colocar tarjetas de aviso, cumpliendo con lo establecido en el apéndice A; 6) colocar los candados de seguridad; 7) asegurarse que se realizó el bloqueo; 8) avisar a los trabajadores involucrados cuando haya sido retirado el bloqueo. El trabajador que colocó las tarjetas de aviso, debe ser el que las retire.',
            'tipo' => '7. Programa Específico de Seguridad para la Operación y Mantenimiento de la Maquinaria y Equip',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => 'Protectores de seguridad en la maquinaria y equipo. Los protectores son elementos que cubren a la maquinaria y equipo para evitar el acceso al punto de operación y evitar un riesgo al trabajador. ',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1.1',
            'descripcion' => ' Se debe verificar que los protectores cumplan con las siguientes condiciones:',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => 'Son elementos que se deben instalar para impedir el desarrollo de una fase peligrosa en cuanto se detecta dentro de la zona de riesgo de la maquinaria y equipo, la presencia de un trabajador o parte de su cuerpo. ',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.1',
            'descripcion' => ' La maquinaria y equipo deben estar provistos de dispositivos de seguridad para paro de urgencia de fácil activación. ',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.2',
            'descripcion' => 'La maquinaria y equipo deben contar con dispositivos de seguridad para que las fallas de energía no generen condiciones de riesgo. ',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.3',
            'descripcion' => ' Se debe garantizar que los dispositivos de seguridad cumplan con las siguientes condiciones: a) ser accesibles al operador; b) cuando su funcionamiento no sea evidente se debe señalar que existe un dispositivo de seguridad, de acuerdo a lo establecido en la NOM-026-STPS-1998; c) proporcionar una protección total al trabajador; d) estar integrados a la maquinaria y equipo; e) facilitar su mantenimiento, conservación y limpieza general; f) estar protegidos contra una operación involuntaria; g) el dispositivo debe prever que una falla en el sistema no evite su propio funcionamiento y que a su vez evite la iniciación del ciclo hasta que la falla sea corregida; h) cuando el trabajador requiera alimentar o retirar materiales del punto de operación manualmente y esto represente un riesgo, debe usar un dispositivo de mando bimanual, un dispositivo asociado a un protector o un dispositivo sensitivo.',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.4',
            'descripcion' => ' En el caso de las electroerosionadoras, adicionalmente a lo establecido en el punto anterior, se debe: a) contar con un sistema indicador y controlador de freno; ',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.5',
            'descripcion' => 'En la maquinaria y equipo que cuente con interruptor final de carrera se debe cumplir que: a) el interruptor final de carrera, esté protegido contra una operación no deseada; b) el embrague de accionamiento mecánico, pueda desacoplarse al completar un ciclo; c) el funcionamiento sólo se pueda restablecer a voluntad del trabajador',
            'tipo' => '8. Protectores y dispositivos de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 6,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-009
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-009-STPS-2011',
            'titulo' => ' Condiciones de seguridad para realizar trabajos en altura.',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-009.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => ' Contar con un análisis de las condiciones prevalecientes en las áreas en las que se llevarán a cabo los trabajos en altura, en forma previa a su realización, a fin de identificar los factores de riesgo existentes. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Disponer de los instructivos, manuales o procedimientos para la instalación, operación y mantenimiento de los sistemas o equipos utilizados en los trabajos en altura, redactados en idioma español. Dichos instructivos, manuales o procedimientos, deberán estar elaborados con base en las instrucciones del fabricante. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Proporcionar autorización por escrito a los trabajadores que realicen trabajos en altura, mediante andamios tipo torre o estructura, andamios suspendidos y plataformas de elevación, conforme se determina en el numeral 7.2 de esta Norma, la cual será otorgada una vez que se compruebe que se han aplicado las medidas de seguridad requeridas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Cumplir con las medidas generales de seguridad y condiciones de seguridad establecidas en los capítulos del 7 al 13 de la presente Norma, para la ejecución de trabajos en altura con el uso de sistemas personales para trabajos en altura, andamios tipo torre o estructura, andamios suspendidos, plataformas de elevación, escaleras de mano y redes de seguridad. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => 'Supervisar que se cumpla con las medidas de seguridad dispuestas en los instructivos, manuales o procedimientos para la instalación, operación y mantenimiento de los sistemas o equipos utilizados en los trabajos en altura, así como con las medidas generales de seguridad y condiciones de seguridad establecidas en esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Establecer y aplicar un programa de revisión y mantenimiento a los sistemas o equipos utilizados para la realización de trabajos en altura, de acuerdo con lo señalado en el numeral 7.14 de la presente Norma, y de conformidad con las indicaciones del fabricante.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Llevar los registros de las revisiones y del mantenimiento preventivo y correctivo que se practiquen a los sistemas o equipos utilizados para la realización de trabajos en altura, mismos que deberán conservarse al menos durante un año.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => ' Disponer de un plan de atención a emergencias, de acuerdo con lo previsto en el Capítulo 15 de esta Norma, derivado de la ejecución de trabajos en altura. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.12',
            'descripcion' => 'Contar con un botiquín de primeros auxilios que contenga el manual y los materiales de curación necesarios para atender los posibles casos de emergencia, identificados de acuerdo con los riesgos a que estén expuestos los trabajadores y las actividades que realicen.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.13',
            'descripcion' => ' Proporcionar capacitación, adiestramiento e información a los trabajadores que estarán involucrados en la realización de los trabajos en altura, con base en lo dispuesto en el Capítulo 16 de la presente Norma, así como en lo relativo a la aplicación del plan de atención a emergencias, a que se refiere el Capítulo 15  de la misma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.14',
            'descripcion' => 'Supervisar que los contratistas cumplan con lo establecido en esta Norma, cuando el patrón convenga los servicios de terceros para realizar trabajos en altura.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7',
            'descripcion' => 'Para la realización de trabajos en altura, se deberá cumplir con lo establecido a continuación:',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => 'Colocar en bordes de azoteas, terrazas, miradores, galerías o estructuras fijas elevadas, al igual que en aberturas como perforaciones, pozos, cubos y túneles verticales: barreras fijas o protecciones laterales o perimetrales, o redes de seguridad para protección colectiva contra caídas de altura, de conformidad con lo dispuesto en el Capítulo 13 de esta Norma, entre otros elementos de prevención, o bien proveer a los trabajadores de sistemas personales para trabajos en altura, de acuerdo con lo establecido en el Capítulo 8 de la presente Norma. ',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Efectuar trabajos en altura sólo con personal capacitado y autorizado por el patrón. Las autorizaciones deberán contener al menos lo siguiente: a) El nombre del trabajador autorizado; b) El tipo de trabajo por desarrollar y el área o lugar donde se llevará a cabo la actividad; c) Las medidas de seguridad que se deberán aplicar conforme al trabajo en altura por realizar y los factores de riesgo identificados en el análisis de las condiciones prevalecientes del área donde se desarrollará éste; d) La fecha y hora de inicio de las actividades, y el tiempo estimado de duración, y e) El nombre y firma del patrón o de la persona que designe para otorgar la autorización.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => 'Revisar el sistema o equipo antes de ser utilizado, conforme a las instrucciones del fabricante, respecto a posibles desgastes, daños, deterioros, mal funcionamiento u otras anomalías. Los componentes defectuosos deberán ser removidos del servicio e identificados para evitar su uso, si su resistencia o funcionamiento se ven afectados. Cualquier componente que deba reemplazarse, deberá sustituirse únicamente por otro original o que esté autorizado por el fabricante en el manual de mantenimiento que éste provea con el sistema.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.6',
            'descripcion' => 'Constatar que en ningún caso se rebase la capacidad de carga nominal del sistema o equipo en uso, de acuerdo con el instructivo o manual de operación, conforme a las indicaciones del fabricante.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.7',
            'descripcion' => 'Considerar los riesgos adicionales generados por la presencia de fuentes de calor -como operaciones de soldadura y corte-, humedad, ácidos, aceite, grasa, polvo, ambientes corrosivos o con temperaturas extremas, entre otros; evaluar su efecto en el sistema en uso, al igual que adoptar medidas preventivas para el personal que realiza trabajos en altura en presencia de altas temperaturas ambientales, tales como hidratación, protección a la piel y/o pausas de trabajo.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.8',
            'descripcion' => 'Prohibir el uso de cables metálicos donde exista riesgo eléctrico',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.9',
            'descripcion' => ' Desenergizar o reubicar las líneas eléctricas que se encuentren en el lugar en donde se realizarán los trabajos en altura y que representen riesgo para los trabajadores, conforme a lo dispuesto en la  NOM-029STPS-2005, o las que la sustituyan, o, cuando esto no sea posible, mantener en todo momento las distancias de seguridad hacia dichas líneas',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.10',
            'descripcion' => 'Aplicar, cuando se trabaje en la proximidad de líneas energizadas, aun cuando se mantengan las distancias de seguridad referidas en el numeral 7.9 de la presente Norma, las medidas de seguridad siguientes: a) Tomar precauciones para evitar que se llegue a tener contacto accidental con las líneas energizadas, al manipular objetos conductivos largos, tales como varillas, tubos, cables, herramientas, entre otros; b) Colocar protecciones como cintas o mantas aislantes en las líneas eléctricas acordes con la tensión que en ellas se maneje, por parte de personal capacitado en el manejo de líneas eléctricas energizadas, y c) Utilizar equipo de protección personal, consistente al menos en casco con barbiquejo, calzado y guantes dieléctricos, conforme a la tensión eléctrica de las líneas energizadas',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.11',
            'descripcion' => 'Proteger las cuerdas o cables cuando pasen por bordes o aristas filosas, o por superficies ásperas, que puedan tener un efecto cortante o un desgaste excesivo por fricción, con materiales que eviten estos riesgos.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.12',
            'descripcion' => ' Delimitar la zona o área a nivel de piso en la que se realizará el trabajo en altura, mediante su acordonamiento y señalización, esta última con base en lo establecido en la NOM-026-STPS-2008, o las que la sustituyan, a fin de evitar que permanezcan o transiten personas por dicha zona o área.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.13',
            'descripcion' => ' Evitar o interrumpir las actividades en altura cuando se detecten condiciones climáticas que impliquen riesgos para los trabajadores, tales como lluvia intensa, tormentas eléctricas, nevado y vientos fuertes sostenidos, conforme a las características del sistema o equipo utilizados y las especificaciones del fabricante.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.14',
            'descripcion' => 'Someter el sistema o equipo utilizado a una revisión anual o con la periodicidad indicada por el fabricante, la que resulte menor, a fin de asegurarse que se encuentran en óptimas condiciones de seguridad y funcionamiento. Dicha revisión deberá ser realizada por personal capacitado y adiestrado para tal fin. En el caso de los sistemas utilizados en ambientes con condiciones extremas o perjudiciales para éstos, las revisiones deberán programarse con mayor frecuencia. ',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.15',
            'descripcion' => 'Llevar el registro de las revisiones y mantenimiento realizados a los sistemas o equipos, en el que al menos se deberá consignar lo siguiente: a) Los datos generales del sistema o equipo como marca, modelo y número de serie u otra identificación individual de éste; b) Las fechas de las revisiones y acciones de mantenimiento; c) Las observaciones que resulten de las revisiones efectuadas al sistema o equipo; d) Las acciones preventivas y correctivas realizadas, como reparaciones, reemplazos, retiro del servicio, destrucción, entre otras; e) La identificación del trabajador o trabajadores responsables de la reparación, y f) El señalamiento de los responsables de la liberación para su uso.',
            'tipo' => '7. Medidas generales de seguridad para realizar trabajos en altura',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' Requisitos generales ',
            'tipo' => '8. Sistemas personales para trabajos en altura ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1.1',
            'descripcion' => 'Se deberá supervisar, en todo momento, al realizar trabajos en altura, que el sistema personal para trabajos en altura se use conforme a lo establecido en las instrucciones del fabricante',
            'tipo' => '8. Sistemas personales para trabajos en altura ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1.2',
            'descripcion' => 'Se deberá verificar que los sistemas personales y sus subsistemas y componentes, en su caso, cuentan con la contraseña oficial de un organismo de certificación, acreditado y aprobado en los términos de la Ley Federal sobre Metrología y Normalización, que certifique su cumplimiento con las normas oficiales mexicanas o, a falta de éstas, con las normas mexicanas que correspondan. ',
            'tipo' => '8. Sistemas personales para trabajos en altura ',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.2',
            'descripcion' => 'Las plataformas de elevación deberán contar con los componentes que a continuación se indican: a) Canastilla o plataforma de trabajo, integrada al equipo, la cual deberá contener una protección lateral con una altura mínima de 90 cm. No deberán utilizarse cuerdas, cables, cadenas o cualquier otro material flexible para sustituir la canastilla; b) Dispositivos de seguridad para asegurar su nivelación o estabilizadores en el sitio de trabajo, de acuerdo con las especificaciones del fabricante; c) Panel de control de piso y en canastilla, con dispositivos que permitan a los trabajadores bajar la plataforma hasta el suelo en caso de emergencia; d) Sistema automático de alarma sonora, para indicar el ascenso, descenso, tracción -desplazamiento delantero o trasero-, y cualquier otro tipo de movimiento -elevación y movimiento del brazo telescópico-, de la plataforma; e) Dispositivo de anclaje, para conexión del sistema de protección personal para interrumpir caídas de altura -arnés, línea de vida, absorbedor de energía, entre otros-, integrado a la canastilla de la plataforma o brazo, y f) Limitador de velocidad de desplazamiento, con el brazo extendido.',
            'tipo' => '11. Plataformas de elevació',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.3',
            'descripcion' => 'Al inicio de cada jornada, se deberá realizar una revisión visual y prueba funcional de la plataforma de elevación, para verificar el buen funcionamiento de los siguientes elementos; a) Controles de operación y de emergencia; b) Dispositivos de seguridad de los equipos; c) Disponibilidad del equipo de protección individual contra caídas; d) Sistemas neumáticos, hidráulicos, eléctricos y de combustión, según aplique; e) Señales de alerta y control; f) Integridad y legibilidad de las calcomanías; g) Estado físico que guardan los estabilizadores, ejes expansibles y estructura en general, y h) Cualquier otro elemento especificado por el fabricante. ',
            'tipo' => '11. Plataformas de elevació',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.4',
            'descripcion' => 'Al inicio de cada jornada, se deberá verificar que no existan en la plataforma de elevación: a) Evidencias de soldaduras deterioradas u otros defectos estructurales; b) Escapes de circuitos hidráulicos; c) Daños en cables; d) Mal estado de conexiones eléctricas; e) Condiciones anómalas en ruedas, neumáticos, frenos y baterías, y f) Residuos de productos químicos agresivos y de sustancias como soluciones jabonosas, aceite, grasas, pintura, barro u otras que puedan hacer resbaladiza la superficie de la plataforma o generar cualquier otro tipo de riesgo a los trabajadores.',
            'tipo' => '11. Plataformas de elevació',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.5',
            'descripcion' => ' Durante la operación de las plataformas de elevación se deberá cumplir con lo siguiente: a) Efectuar una revisión del lugar de trabajo en el que se utilizará la plataforma antes de cada uso; b) Verificar antes de emplear la plataforma, que: 1) Los medios para mantener la estabilidad, se utilizan de acuerdo con las indicaciones del fabricante; 2) La carga máxima no excede la capacidad nominal, determinada por el fabricante, de acuerdo con las configuraciones posibles del equipo, y 3) Los trabajadores que laboran en la canastilla o plataforma de trabajo utilizan los sistemas de protección personal contra caídas, anclados a los dispositivos previstos e instalados dentro  de la propia plataforma, así como para otros riesgos a los que se encuentren expuestos por la naturaleza de las actividades por desarrollar, o del lugar en que éstas se realizarán; c) Mantener antes y durante la manipulación de la plataforma: 1) Una visión clara del camino y área por recorrer; 2) La distancia segura de los obstáculos, depresiones o hundimientos naturales o accidentales en un terreno o superficie, rampas y otros factores de riesgo, que deberán estar especificados en el proyecto de trabajo, y 3) Las distancias mínimas hacia obstáculos aéreos y líneas eléctricas energizadas, especificadas en el proyecto de trabajo u orden de servicio; d) Limitar la velocidad de desplazamiento de la plataforma, tomando en cuenta: 1) Las condiciones de la superficie; 2) El tráfico; 3) La visibilidad; 4) La presencia de pendientes; 5) La ubicación del personal, y 6) Otros factores de riesgo; ',
            'tipo' => '11. Plataformas de elevació',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.1',
            'descripcion' => 'Las escaleras de mano deberán ser revisadas antes de cada uso. Aquéllas que tengan defectos que puedan afectar su uso seguro, deberán ser retiradas del servicio inmediatamente y marcarse con la leyenda “Peligrosa. No utilizar.” u otra similar, para después proceder a su reparación, desecho o destrucción. Las reparaciones mayores deberán ser realizadas por personal capacitado. ',
            'tipo' => '12. Escaleras de mano',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.2',
            'descripcion' => 'Las escaleras de mano deberán: a) Ser almacenadas en lugares donde no estén expuestas a elementos de intemperie que puedan dañarlas, como sol y lluvia; b) Permanecer libres de grasa o aceite en sus peldaños; c) Estar pintadas con un material transparente que no pueda ocultar los defectos o daños presentes, cuando sean fabricadas de madera; ',
            'tipo' => '12. Escaleras de mano',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.3',
            'descripcion' => 'Se deberá prohibir que las escaleras de mano: a) Sean almacenadas cerca de radiadores, estufas, tuberías de vapor, o en otros lugares donde se sometan a calor o humedad excesivos, cuando son fabricadas de madera; b) Se sometan a una carga que exceda la máxima establecida por el fabricante; c) Sean colocadas sobre cajas, tambos u otras bases inestables para alcanzar alturas mayores, ni en superficies inclinadas, a menos que estén equipadas con algún sistema específicamente diseñado para este tipo de superficies; d) Se usen simultáneamente por más de una persona, a menos que estén específicamente diseñadas para ese uso; e) Sean utilizadas como plataformas, tarimas o para cualquier otro propósito para el que no fueron diseñadas, y f) Se improvisen con elementos que permitan alcanzar una altura adicional a la de ellas. ',
            'tipo' => '12. Escaleras de mano',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.4',
            'descripcion' => ' Al realizar trabajos en altura, empleando una escalera de mano, se deberá cumplir con las condiciones de seguridad siguientes: a) Revisar visualmente, en forma previa a su utilización, el área donde será empleada la escalera, a efecto de asegurarse que no existan condiciones de riesgo; b) Cerrar con llave, bloquear o vigilar permanentemente las puertas, cuando se coloque frente a ellas una escalera de mano; c) Ascender o descender de frente a la escalera de mano; d) Permanecer el operario de frente a ella mientras se realiza el trabajo, sin que el centro del trabajador sobrepase los rieles laterales de ésta. Se deberá evitar sobre-extenderse para alcanzar algún punto, zona u objeto, de forma que se ponga en riesgo la estabilidad; e) Prohibir al usuario pararse por arriba del antepenúltimo peldaño, mientras se trabaje en una escalera de mano; f) Utilizar calzado con suela antiderrapante para la realización de trabajos sobre las escaleras de mano; g) Sostener en todo momento la escalera de mano, desde su parte inferior con ambas manos, por parte de una segunda persona, durante el ascenso o descenso de más de 5 m de altura; h) Sujetar tanto la parte inferior como superior, cuando se trabaje sobre una escalera de mano. La superficie donde descanse el extremo superior de la escalera deberá ser rígida y tener suficiente resistencia para la carga aplicada, y i) Prohibir el uso de escaleras metálicas en lugares donde puedan entrar en contacto con líneas eléctricas energizadas. ',
            'tipo' => '12. Escaleras de mano',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.1',
            'descripcion' => ' Las redes de seguridad, deberán: a) Estar extendidas por lo menos 2.5 m hacia afuera del borde de la superficie de trabajo y ser instaladas lo más cerca posible bajo la superficie que se requiere proteger, pero en ningún caso a más de 6 m por debajo de ésta; b) Complementar la red de seguridad con redes de cubierta ligera para proteger al personal que trabaje en niveles inferiores de la caída de materiales y escombros; c) Estar instaladas de acuerdo con las especificaciones del fabricante; d) Estar provistas de una cuerda perimetral de alta resistencia y cuerdas de sujeción en orillas y extremos para el anclaje a estructuras fijas, y e) Estar sujetas a control y mantenimiento.',
            'tipo' => '13. Redes de seguridad',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.1',
            'descripcion' => 'A los trabajadores que realicen trabajos en altura se les deberán practicar exámenes médicos al menos cada año, de acuerdo con lo que establezcan las normas oficiales mexicanas que al respecto emita la Secretaría de Salud. ',
            'tipo' => '14. Seguimiento a la salud de los trabajadores',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.2',
            'descripcion' => 'Los exámenes médicos deberán satisfacer lo siguiente: a) Constar por escrito o en medios electrónicos, y b) Contener: 1) El nombre del trabajador; 2) La evaluación médica del trabajador, y 3) El nombre del médico, su firma y número de cédula profesional. ',
            'tipo' => '14. Seguimiento a la salud de los trabajadores',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.3',
            'descripcion' => 'El último examen practicado deberá conservarse mientras el trabajador se mantenga activo en la realización de trabajos en altura.',
            'tipo' => '14. Seguimiento a la salud de los trabajadores',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '15.1',
            'descripcion' => 'El plan de atención a emergencias deberá contener, al menos, lo siguiente: a) El responsable de implementar el plan; b) Los procedimientos para: 1) El alertamiento, en caso de ocurrir una emergencia; 2) La comunicación de la emergencia, junto con el directorio de los servicios de auxilio para la emergencia (rescate, hospitales, entre otros); 3) La suspensión de las actividades; 4) Los primeros auxilios en caso de accidentes; 5) La eliminación de los riesgos durante y después de la emergencia; 6) El uso de los sistemas y equipo de rescate, en su caso, y ',
            'tipo' => '15. Plan de atención a emergencias',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '16.1',
            'descripcion' => 'A los trabajadores que realicen trabajos en altura se les deberá proporcionar capacitación, adiestramiento e información, de acuerdo con el tipo de sistema o equipo utilizado, las tareas asignadas y la atención a emergencias. ',
            'tipo' => '16. Capacitación, adiestramiento e información',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '16.2',
            'descripcion' => 'La capacitación y adiestramiento de los trabajadores que laboren con sistemas personales para trabajos en altura, deberá considerar, al menos lo siguiente: a) Los sistemas o equipos disponibles para la realización de trabajos en altura y para la protección contra caídas de altura; b) La composición, características y funcionamiento del sistema o equipo utilizado; c) Los aspectos relacionados con: 1) La selección e instalación de los puntos y dispositivos de anclaje seguros; 2) La forma correcta de instalar, colocar, ajustar y utilizar el sistema o equipo; 3) Las conexiones y atados correctos; 4) Las revisiones rutinarias que requiere el sistema o equipo, su periodicidad, así como los criterios para retirarlos del servicio, de conformidad con las instrucciones del fabricante; 5) Las limitantes y posibles restricciones en el uso del sistema o equipo; 6) La estimación de la distancia total de caída, incluyendo la distancia de desaceleración del absorbedor de energía, a efecto de prevenir colisión o golpe en un nivel inferior o contra algún objeto que se encuentre en la trayectoria de una posible caída; 7) La catenaria formada en las líneas de vida horizontales, en su caso; 8) La forma de prevenir el efecto pendular, y 9) Los métodos de uso, revisión, limpieza y resguardo del sistema o equipo, entre otros; d) Las condiciones de uso que deberán evitarse para no disminuir las capacidades de resistencia o seguridad en general de los sistemas o equipos, como: 1) Ensamble de componentes incompatibles de diferentes fabricantes; 2) Alteraciones o adiciones no autorizadas por los fabricantes; 3) Posibles sobreesfuerzos localizados en ciertos componentes del sistema o equipo, cuando no se ha efectuado una adecuada instalación de éste; 4) Exposición de las cuerdas al efecto cortante de aristas u objetos puntiagudos, y 5) Exposición del sistema o de alguna de sus partes a sustancias corrosivas u otras condiciones que puedan llegar a degradar los materiales, como calor, fuego, radiación solar, entre otras; e) La forma correcta de ensamblar el sistema con otros tipos de sistemas o equipos complementarios, en su caso. Por ejemplo, sistemas para interrumpir caídas con sistemas de ascenso/descenso controlado, de posicionamiento, de rescate, entre otros; f) Las condiciones bajo las cuales los sistemas o equipos deberán ser puestos fuera de servicio para su reparación o reemplazo, por personal capacitado y autorizado por el patrón, de acuerdo con lo establecido por el fabricante; g) Las medidas de seguridad establecidas en esta Norma, aplicables a las actividades por realizar; h) Las condiciones climáticas u otros factores desfavorables que obligarían a interrumpir los trabajos en altura; i) La descripción general sobre los efectos en el organismo durante la detención de una caída y la suspensión posterior a ésta, con énfasis en las condiciones que deberán evitarse para prevenir lesiones u otro tipo de daños a la salud; j) El contenido del plan de atención a emergencias y otras acciones que se desprendan de las situaciones de emergencia que puedan presentarse durante la realización de los trabajos en altura, y k) La teoría y práctica sobre técnicas y uso de equipos de rescate en altura. ',
            'tipo' => '16. Capacitación, adiestramiento e información',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '16.5',
            'descripcion' => ' La capacitación y adiestramiento de los trabajadores que laboren en plataformas de elevación, deberá comprender, al menos, lo siguiente: a) El uso específico del modelo por utilizar, en su propio lugar de trabajo o en un lugar con condiciones similares; b) El contenido del programa de entrenamiento previsto por el fabricante del equipo por utilizar; c) Los aspectos fundamentales de la seguridad, operación, funcionamiento y revisión, en concordancia con dicho equipo y los medios de uso previstos; d) La evaluación teórica y práctica de los conocimientos y habilidades adquiridos por el evaluado; e) El uso correcto del sistema de protección personal para interrumpir caídas de altura, y f) El contenido y aplicación del plan de atención a emergencias',
            'tipo' => '16. Capacitación, adiestramiento e información',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '16.6',
            'descripcion' => ' La información que se proporcione a los trabajadores que utilicen escaleras de mano, deberá comprender, al menos, lo siguiente: a) La selección adecuada del tipo de escalera; b) Las instrucciones del fabricante, en su caso; c) El uso y cuidado de éstas, antes de su empleo; d) La revisión de las condiciones que guarda la escalera; e) Su ensamble y desensamble adecuados; f) La transportación, movimiento, ascenso y descenso; g) La comprensión absoluta de las condiciones seguras de trabajo y situaciones de riesgo que pueden llegar a presentarse, como el uso con superficies mojadas o resbaladizas o por la presencia de vientos intensos, y h) El uso correcto del sistema de protección personal para interrumpir caídas de altura.',
            'tipo' => '16. Capacitación, adiestramiento e información',
            'frecuencia' => ' ',
            'norm_id' => 7,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-002
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-002-STPS-2010',
            'titulo' => 'Condiciones de seguridad-Prevención y protección contra incendios en los centros de trabajo.',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-002.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => 'Clasificar el riesgo de incendio del centro de trabajo o por áreas que lo integran, tales como plantas, edificios o niveles, de conformidad con lo establecido por el Apéndice A de la presente Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Contar con un croquis, plano o mapa general del centro de trabajo, o por áreas que lo integran, actualizado y colocado en los principales lugares de entrada, tránsito, reunión o puntos comunes de estancia o servicios para los trabajadores, que contenga lo siguiente, según aplique: a) El nombre, denominación o razón social del centro de trabajo y su domicilio; b) La identificación de los predios colindantes; c) La identificación de las principales áreas o zonas del centro de trabajo con riesgo de incendio, debido a la presencia de material inflamable, combustible, pirofórico o explosivo, entre otros; d) La ubicación de los medios de detección de incendio, así como de los equipos y sistemas contra incendio; e) Las rutas de evacuación, incluyendo, al menos, la ruta de salida y la descarga de salida, además de las salidas de emergencia, escaleras de emergencia y lugares seguros; f) La ubicación del equipo de protección personal para los integrantes de las brigadas contra incendio, y g) La ubicación de materiales y equipo para prestar los primeros auxilios.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Contar con las instrucciones de seguridad aplicables en cada área del centro de trabajo y difundirlas entre los trabajadores, contratistas y visitantes, según corresponda (Véase la Guía de Referencia I, Instrucciones de Seguridad para la Prevención y Protección contra Incendios). ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => ' Contar con un plan de atención a emergencias de incendio, conforme al Capítulo 8 de esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Desarrollar simulacros de emergencias de incendio al menos una vez al año, en el caso de centros de trabajo clasificados con riesgo de incendio ordinario, y al menos dos veces al año para aquellos con riesgo de incendio alto, conforme a lo señalado en el Capítulo 10 de esta Norma (Véase la Guía de Referencia II, Brigadas de Emergencia y Consideraciones Generales sobre la Planeación de los Simulacros de Incendio). ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Elaborar un programa de capacitación anual teórico-práctico en materia de prevención de incendios y atención de emergencias, conforme a lo previsto en el Capítulo 11 de esta Norma, así como capacitar a los trabajadores y a los integrantes de las brigadas contra incendio, con base en dicho programa. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Dotar del equipo de protección personal a los integrantes de las brigadas contra incendio, considerando para tal efecto las funciones y riesgos a que estarán expuestos, de conformidad con lo previsto en la NOM-017-STPS-2008, o las que la sustituyan (Véase la Guía de Referencia III, Componentes y Características Generales del Equipo de Protección Personal para los Integrantes de las Brigadas contra Incendio). ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => 'Contar en las áreas de los centros de trabajo clasificadas con riesgo de incendio ordinario, con medios de detección y equipos contra incendio, y en las de riesgo de incendio alto, además de lo anteriormente señalado, con sistemas fijos de protección contra incendio y alarmas de incendio, para atender la posible dimensión de la emergencia de incendio, mismos que deberán ser acordes con la clase de fuego que pueda presentarse (Véanse la Guía de Referencia IV, Detectores de Incendio y la Guía de Referencia V, Sistemas Fijos contra Incendio).',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' Contar con instrucciones de seguridad aplicables en cada área del centro trabajo al alcance de los trabajadores, incluidas las relativas a la ejecución de trabajos en caliente en las áreas en las que se puedan presentar incendios, y supervisar que éstas se cumplan. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Elaborar un programa anual de revisión mensual de los extintores, y vigilar que los extintores cumplan con las condiciones siguientes: a) Que se encuentren en la ubicación asignada en el plano a que se refiere el numeral 5.2, inciso d),  y que estén instalados conforme a lo previsto por el numeral 7.17 de esta Norma; b) Que su ubicación sea en lugares visibles, de fácil acceso y libres de obstáculos; c) Que se encuentren señalizados, de conformidad con lo que establece la NOM-026-STPS-2008 o la NOM-003-SEGOB-2002, o las que las sustituyan; d) Que cuenten con el sello o fleje de garantía sin violar; e) Que la aguja del manómetro indique la presión en la zona verde (operable), en el caso de extintores cuyo recipiente esté presurizado permanentemente y que contengan como agente extintor agua, agua con aditivos, espuma, polvo químico seco, halones, agentes limpios o químicos húmedos; f) Que mantengan la capacidad nominal indicada por el fabricante en la etiqueta, en el caso de extintores con bióxido de carbono como agente extintor; g) Que no hayan sido activados, de acuerdo con el dispositivo que el fabricante incluya en el extintor para detectar su activación, en el caso de extintores que contengan como agente extintor polvo químico seco, y que se presurizan al momento de operarlos, por medio de gas proveniente de cartuchos o cápsulas, internas o externas; h) Que se verifiquen las condiciones de las ruedas de los extintores móviles; i) Que no existan daños físicos evidentes, tales como corrosión, escape de presión, obstrucción, golpes o deformaciones; j) Que no existan daños físicos, tales como roturas, desprendimientos, protuberancias o perforaciones, en mangueras, boquillas o palanca de accionamiento, que puedan propiciar su mal funcionamiento. El extintor deberá ser puesto fuera de servicio, cuando presente daño que afecte su operación,  o dicho daño no pueda ser reparado, en cuyo caso deberá ser sustituido por otro de las mismas características y condiciones de operación; k) Que la etiqueta, placa o grabado se encuentren legibles y sin alteraciones; l) Que la etiqueta cuente con la siguiente información vigente, después de cada mantenimiento: 1) El nombre, denominación o razón social, domicilio y teléfono del prestador de servicios; 2) La capacidad nominal en kilogramos o litros, y el agente extintor; 3) Las instrucciones de operación, breves y de fácil comprensión, apoyadas mediante figuras  o símbolos; 4) La clase de fuego a que está destinado el equipo; 5) Las contraindicaciones de uso, cuando aplique; 6) La contraseña oficial del cumplimiento con la normatividad vigente aplicable, de conformidad con lo dispuesto por la Norma Oficial Mexicana NOM-106-SCFI-2000, o las que la sustituyan, en su caso; 7) El mes y año del último servicio de mantenimiento realizado, y 8) La contraseña oficial de cumplimiento con la Norma NOM-154-SCFI-2005, o las que la sustituyan, y el número de dictamen de cumplimiento con la misma, y m) Los extintores de polvo químico seco deberán contar además con el collarín que establece la NOM154-SCFI-2005, o las que la sustituyan. No se requerirá la revisión de los aspectos contenidos en el numeral 7.2, inciso l), subincisos 7) y 8),  e inciso m), en el caso de equipos de nueva adquisición. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => 'Contar con el registro de los resultados de la revisión mensual a los extintores que al menos contenga: a) La fecha de la revisión; b) El nombre o identificación del personal que realizó la revisión; c) Los resultados de la revisión mensual a los extintores; d) Las anomalías identificadas, y e) El seguimiento de las anomalías identificadas.  ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.4',
            'descripcion' => 'Establecer y dar seguimiento a un programa anual de revisión y pruebas a los equipos contra incendio, a los medios de detección y, en su caso, a las alarmas de incendio y sistemas fijos contra incendio (Véase la Guía de Referencia VI, Recomendaciones sobre Periodos Máximos y Actividades Relativas a la Revisión y Prueba de Sistemas y Equipos contra Incendio). Si derivado de dicha revisión y pruebas, se encontrara que existe daño o deterioro en los equipos, sistemas y medios de detección contra incendio, éstos se someterán al mantenimiento correspondiente por personal capacitado para tal fin. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5',
            'descripcion' => ' Establecer y dar seguimiento a un programa anual de revisión a las instalaciones eléctricas de las áreas del centro de trabajo, con énfasis en aquellas clasificadas como de riesgo de incendio alto, a fin de identificar y corregir condiciones inseguras que puedan existir, el cual deberá comprender, al menos, los elementos siguientes: a) Tableros de distribución; b) Conductores; c) Canalizaciones, incluyendo los conductores y espacios libres en éstas; d) Cajas de conexiones; e) Contactos; f) Interruptores; g) Luminarias; h) Protecciones, incluyendo las de cortocircuito -fusibles, cuchillas desconectadoras, interruptor automático, dispositivos termo-magnéticos, entre otros-, en circuitos alimentadores y derivados, y i) Puesta a tierra de equipos y circuitos.',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5.1',
            'descripcion' => ' Este programa deberá ser elaborado y aplicado por personal previamente capacitado y autorizado por el patrón. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5.2',
            'descripcion' => ' Entre los aspectos a revisar dentro del programa a que se refiere este numeral, se deberán considerar los denominados puntos calientes de la instalación eléctrica, aislamientos o conexiones rotas  o flojas, expuestas o quemadas; sobrecargas (varias cargas en un solo tomacorriente); alteraciones,  e improvisaciones, entre otras. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.7',
            'descripcion' => 'Contar con el registro de resultados de los programas a que se refieren los numerales 7.4, 7.5 y 7.6, con al menos los datos siguientes: a) El nombre, denominación o razón social y domicilio completo del centro de trabajo; b) La fecha de la revisión; c) Las áreas revisadas; d) Las anomalías detectadas y acciones determinadas para su corrección y seguimiento, en su caso, y e) El nombre y puesto de los responsables de la revisión',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.9',
            'descripcion' => 'Contar con señalización en la proximidad de los elevadores, que prohíba su uso en caso de incendio, de conformidad con lo establecido en la NOM-003-SEGOB-2002, o las que la sustituyan',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.10',
            'descripcion' => ' Prohibir y evitar el bloqueo, daño, inutilización o uso inadecuado de los equipos y sistemas contra incendio, los equipos de protección personal para la respuesta a emergencias, así como los señalamientos de evacuación, prevención y de equipos y sistemas contra incendio, entre otros. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.11',
            'descripcion' => 'Establecer controles de acceso para los trabajadores y demás personas que ingresen a las áreas donde se almacenen, procesen o manejen materiales inflamables o explosivos. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.12',
            'descripcion' => 'Adoptar las medidas de seguridad para prevenir la generación y acumulación de electricidad estática en las áreas donde se manejen materiales inflamables o explosivos, de conformidad con lo establecido en la NOM-022-STPS-2008, o las que la sustituyan. Asimismo, controlar en dichas áreas el uso de herramientas, ropa, zapatos y objetos personales que puedan generar chispa, flama abierta o altas temperaturas.',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.13',
            'descripcion' => 'Contar con las medidas o procedimientos de seguridad, para el uso de equipos de calefacción, calentadores, hornos, parrillas u otras fuentes de calor, en las áreas donde existan materiales inflamables o explosivos, y supervisar que se cumplan. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.14',
            'descripcion' => ' Prohibir y evitar que se almacenen materiales o coloquen objetos que obstruyan e interfieran el acceso al equipo contra incendio o a los dispositivos de alarma de incendio o activación manual de los sistemas fijos contra incendio.',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.15',
            'descripcion' => 'Contar con rutas de evacuación que cumplan con las condiciones siguientes: a) Que estén señalizadas en lugares visibles, de conformidad con lo dispuesto por la NOM-026-STPS2008 o la NOM-003-SEGOB-2002, o las que las sustituyan; b) Que se encuentren libres de obstáculos que impidan la circulación de los trabajadores y demás ocupantes; c) Que dispongan de dispositivos de iluminación de emergencia que permitan percibir el piso y cualquier modificación en su superficie, cuando se interrumpa la energía eléctrica o falte iluminación natural; d) Que la distancia por recorrer desde el punto más alejado del interior de una edificación, hacia cualquier punto de la ruta de evacuación, no sea mayor de 40 m. En caso contrario, el tiempo máximo de evacuación de los ocupantes a un lugar seguro deberá ser de tres minutos; e) Que las escaleras eléctricas sean consideradas parte de una ruta de evacuación, previo bloqueo de la energía que las alimenta y de su movimiento; f) Que los elevadores no sean considerados parte de una ruta de evacuación y no se usen en caso de incendio; g) Que los desniveles o escalones en los pasillos y corredores de las rutas de evacuación estén señalizados, de conformidad con la NOM-026-STPS-2008 o la NOM-003-SEGOB-2002, o las que las sustituyan, y h) Que en el recorrido de las escaleras de emergencia exteriores de los centros de trabajo de nueva creación, las ventanas, fachadas de vidrio o cualquier otro tipo de aberturas, no representen un factor de riesgo en su uso durante una situación de emergencia de incendio',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.16',
            'descripcion' => ' Contar con salidas normales y/o de emergencia que cumplan con las condiciones siguientes: a) Que estén identificadas conforme a lo señalado en la NOM-026-STPS-2008 o la NOM-003-SEGOB2002, o las que las sustituyan; b) Que comuniquen a un descanso, en caso de acceder a una escalera; c) Que en las salidas de emergencia, las puertas abran en el sentido del flujo, salvo que sean automáticas y corredizas; d) Que las puertas sean de materiales resistentes al fuego y capaces de impedir el paso del humo entre áreas de trabajo, en caso de quedar clasificados el área o centro de trabajo como de riesgo de incendio alto, y se requiera impedir la propagación de un incendio hacia una ruta de evacuación o áreas contiguas por presencia de materiales inflamables o explosivos; e) Que las puertas de emergencia cuenten con un mecanismo que permita abrirlas desde el interior, mediante una operación simple de empuje; f) Que las puertas consideradas como salidas de emergencia estén libres de obstáculos, candados, picaportes o cerraduras con seguros puestos durante las horas laborales, que impidan su utilización en casos de emergencia, y g) Que cuando sus puertas sean consideradas como salidas de emergencia, y funcionen en forma automática, o mediante dispositivos eléctricos o electrónicos, permitan la apertura manual, si llegara a interrumpirse la energía eléctrica en situaciones de emergencia.',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.17',
            'descripcion' => 'Instalar extintores en las áreas del centro de trabajo, de acuerdo con lo siguiente: a) Contar con extintores conforme a la clase de fuego que se pueda presentar (Véanse la Guía de Referencia VII, Extintores contra Incendio y la Guía de Referencia VIII Agentes Extintores); b) Colocar al menos un extintor por cada 300 metros cuadrados de superficie o fracción, si el grado de riesgo es ordinario; c) Colocar al menos un extintor por cada 200 metros cuadrados de superficie o fracción, si el grado de riesgo es alto; d) No exceder las distancias máximas de recorrido que se indican en la Tabla 1, por clase de fuego, para acceder a cualquier extintor, tomando en cuenta las vueltas y rodeos necesarios: * Los extintores para el tipo de riesgo de incendio alto y fuego clase B, se podrán ubicar a una distancia máxima de 15 m, siempre que sean del tipo móvil. e) Los centros de trabajo o áreas que lo integran con sistemas automáticos de supresión, podrán contar hasta con la mitad del número requerido de extintores que correspondan, de acuerdo con lo señalado en los incisos b) y c) del presente numeral, siempre y cuando tengan una capacidad nominal de al menos seis kilogramos o nueve litros; f) Colocarlos a una altura no mayor de 1.50 m, medidos desde el nivel del piso hasta la parte más alta del extintor, y g) Protegerlos de daños y de las condiciones ambientales que puedan afectar su funcionamiento. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.18',
            'descripcion' => ' Proporcionar mantenimiento a los extintores como resultado de las revisiones mensuales. Dicho mantenimiento deberá estar garantizado conforme a lo establecido en la NOM-154-SCFI-2005, o las que la sustituyan, y habrá de proporcionarse al menos una vez por año. Cuando los extintores se sometan a mantenimiento, deberán ser reemplazados en su misma ubicación, por otros cuando menos del mismo tipo y capacidad. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.19',
            'descripcion' => ' Proporcionar la recarga a los extintores después de su uso y, en su caso, como resultado del mantenimiento, la cual deberá estar garantizada de acuerdo con lo establecido en la NOM-154-SCFI-2005, o las que la sustituyan. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5.3',
            'descripcion' => 'Si derivado de dicha revisión, se encontrara que existe daño o deterioro en las instalaciones eléctricas, éstas se someterán al mantenimiento correspondiente por personal capacitado para tal fin, de conformidad con lo dispuesto por la NOM-029-STPS-2005, o las que la sustituyan. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.6.2',
            'descripcion' => ' Si derivado de la revisión, se encontrara que existen daños o deterioro en dichas instalaciones, éstas se someterán al mantenimiento correspondiente por personal capacitado para tal fin. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.6.1',
            'descripcion' => ' Este programa deberá ser elaborado y aplicado por personal previamente capacitado y autorizado por el patrón. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.8',
            'descripcion' => ' Contar, en su caso, con la señalización que prohíba fumar, generar flama abierta o chispas e introducir objetos incandescentes, cerillos, cigarrillos o, en su caso, utilizar teléfonos celulares, aparatos de radiocomunicación, u otros que puedan provocar ignición por no ser intrínsecamente seguros, en las áreas en donde se produzcan, almacenen o manejen materiales inflamables o explosivos. Dicha señalización deberá cumplir con lo establecido por la NOM-026-STPS-2008 o la NOM-003-SEGOB-2002, o las que  las sustituyan. ',
            'tipo' => '7. Condiciones de prevención y protección contra incendios ',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => 'El plan de atención a emergencias de incendio deberá contener, según aplique, lo siguiente: a) La identificación y localización de áreas, locales o edificios y equipos de proceso, destinados a la fabricación, almacenamiento o manejo de materias primas, subproductos, productos y desechos o residuos que impliquen riesgo de incendio; b) La identificación de rutas de evacuación, salidas y escaleras de emergencia, zonas de menor riesgo y puntos de reunión, entre otros; c) El procedimiento de alertamiento, en caso de ocurrir una emergencia de incendio, con base en el mecanismo de detección implantado; d) Los procedimientos para la operación de los equipos, herramientas y sistemas fijos contra incendio, y de uso del equipo de protección personal para los integrantes de las brigadas contra incendio; e) El procedimiento para la evacuación de los trabajadores, contratistas, patrones y visitantes, entre otros, considerando a las personas con capacidades diferentes; f) Los integrantes de las brigadas contra incendio con responsabilidades y funciones a desarrollar; g) El equipo de protección personal para los integrantes de las brigadas contra incendio; h) El plan de ayuda mutua que se tenga con otros centros de trabajo; i) El procedimiento de solicitud de auxilio a cuerpos especializados para la atención a la emergencia contra incendios, considerando el directorio de dichos cuerpos especializados de la localidad; j) Los procedimientos para el retorno a actividades normales de operación, para eliminar los riesgos después de la emergencia, así como para la identificación de los daños; k) La periodicidad de los simulacros de emergencias de incendio por realizar; l) Los medios de difusión para todos los trabajadores sobre el contenido del plan de atención a emergencias de incendio y de la manera en que ellos participarán en su ejecución, y m) Las instrucciones para atender emergencias de incendio. ',
            'tipo' => '8. Plan de atención a emergencias de incendio',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => ' Los simulacros de emergencias de incendio se deberán realizar por áreas o por todo el centro  de trabajo.',
            'tipo' => '10. Simulacros de emergencias de incendio',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1.1',
            'descripcion' => ' Los simulacros de emergencias de incendio se deberán realizar por áreas o por todo el centro  de trabajo.',
            'tipo' => '10. Simulacros de emergencias de incendio',
            'frecuencia' => ' ',
            'norm_id' => 8,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-025
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-025-STPS-2008',
            'titulo' => ' Condiciones de iluminación en los centros de trabajo. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-025.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Contar con los niveles de iluminación en las áreas de trabajo o en las tareas visuales de acuerdo con
        la Tabla 1 del Capítulo 7. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Efectuar el reconocimiento de las condiciones de iluminación de las áreas y puestos de trabajo, según
        lo establecido en el Capítulo 8. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Contar con el informe de resultados de la evaluación de los niveles de iluminación de las áreas,
        actividades o puestos de trabajo que cumpla con en los apartados 5.2 y 10.4 de la presente Norma, y
        conservarlo mientras se mantengan las condiciones que dieron origen a ese resultado',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => ' Realizar la evaluación de los niveles de iluminación de acuerdo con lo establecido en los capítulos 8 y
        9. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => ' Llevar a cabo el control de los niveles de iluminación, según lo establecido en el Capítulo 10. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Contar con un reporte del estudio elaborado para las condiciones de iluminación del centro de trabajo,
        según lo establecido en el Capítulo 12.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => ' Informar a todos los trabajadores, sobre los riesgos que puede provocar un deslumbramiento o un
        nivel deficiente de iluminación en sus áreas o puestos de trabajo. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Practicar exámenes con periodicidad anual de agudeza visual, campimetría y de percepción de
        colores a los trabajadores que desarrollen sus actividades en áreas del centro de trabajo que cuenten con
        iluminación especial. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => 'Elaborar y ejecutar un programa de mantenimiento para las luminarias del centro de trabajo,
        incluyendo los sistemas de iluminación de emergencia, según lo establecido en el Capítulo 11. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => 'Instalar sistemas de iluminación eléctrica de emergencia, en aquellas áreas del centro de trabajo
        donde la interrupción de la fuente de luz artificial represente un riesgo en la tarea visual del puesto de trabajo,
        o en las áreas consideradas como ruta de evacuación que lo requieran.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' El propósito del reconocimiento es identificar aquellas áreas del centro de trabajo y las tareas visuales
        asociadas a los puestos de trabajo, asimismo, identificar aquéllas donde exista una iluminación deficiente o
        exceso de iluminación que provoque deslumbramiento. +',
            'tipo' => '8. Reconocimiento de las condiciones de iluminación ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => 'Para determinar las áreas y tareas visuales de los puestos de trabajo debe recabarse y registrarse la
        información del reconocimiento de las condiciones de iluminación de las áreas de trabajo, así como de las
        áreas donde exista una iluminación deficiente o se presente deslumbramiento y, posteriormente, conforme se
        modifiquen las características de las luminarias o las condiciones de iluminación del área de trabajo, con los
        datos siguientes:
        a) Distribución de las áreas de trabajo, del sistema de iluminación (número y distribución de luminarias),
        de la maquinaria y del equipo de trabajo;
        b) Potencia de las lámparas;
        c) Descripción del área iluminada: colores y tipo de superficies del local o edificio;
        d) Descripción de las tareas visuales y de las áreas de trabajo, de acuerdo con la Tabla 1 del Capítulo 7;
        e) Descripción de los puestos de trabajo que requieren iluminación localizada, y
        f) La información sobre la percepción de las condiciones de iluminación por parte del trabajador al
        patrón. ',
            'tipo' => '8. Reconocimiento de las condiciones de iluminación ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => 'A partir de los registros del reconocimiento, se debe realizar la evaluación de los niveles de
        iluminación en las áreas o puestos de trabajo de acuerdo con lo establecido en el Apéndice A',
            'tipo' => '9. Evaluación de los niveles de iluminación ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1.1',
            'descripcion' => 'Determinar el factor de reflexión en el plano de trabajo y paredes que por su cercanía al trabajador
        afecten las condiciones de iluminación, según lo establecido en el Apéndice B, y compararlo contra los niveles
        máximos permisibles del factor de reflexión de la Tabla 2.',
            'tipo' => '9. Evaluación de los niveles de iluminación ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1.2',
            'descripcion' => ' La evaluación de los niveles de iluminación debe realizarse en una jornada laboral bajo condiciones
        normales de operación, se puede hacer por áreas de trabajo, puestos de trabajo o una combinación de los
        mismos. ',
            'tipo' => '9. Evaluación de los niveles de iluminación ',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => ' Si en el resultado de la evaluación de los niveles de iluminación se detectaron áreas o puestos de
        trabajo que deslumbren al trabajador, se deben aplicar medidas de control para evitar que el deslumbramiento
        lo afecte. ',
            'tipo' => '10. Control',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.2',
            'descripcion' => ' Si en el resultado de la medición se observa que los niveles de iluminación en las áreas de trabajo o
        las tareas visuales están por debajo de los niveles indicados en la Tabla 1 del Capítulo 7 o que los factores de
        reflexión estén por encima de lo establecido en la Tabla 2 del Capítulo 9, se deben adoptar las medidas de
        control necesarias, entre otras, dar mantenimiento a las luminarias, modificar el sistema de iluminación o su
        distribución y/o instalar iluminación complementaria o localizada. Para esta última medida de control, en
        donde se requiera una mayor iluminación, se deben considerar los siguientes aspectos:
        a) Evitar el deslumbramiento directo o por reflexión al trabajador;
        b) Seleccionar un fondo visual adecuado a las actividades de los trabajadores;
        c) Evitar bloquear la iluminación durante la realización de la actividad, y
        d) Evitar las zonas donde existan cambios bruscos de iluminación. ',
            'tipo' => '10. Control',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.3',
            'descripcion' => 'Se debe elaborar y cumplir un programa de medidas de control a desarrollar, considerando al menos
        las previstas en 10.2. ',
            'tipo' => '10. Control',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.4',
            'descripcion' => 'Una vez que se han realizado las medidas de control, se tiene que realizar una evaluación para
        verificar que las nuevas condiciones de iluminación cumplen con lo establecido en la presente Norma. ',
            'tipo' => '10. Control',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.1',
            'descripcion' => ' Se debe elaborar y mantener un reporte que contenga la información recabada en el reconocimiento,
        los documentos que lo complementen y los datos obtenidos durante la evaluación, con al menos la
        información siguiente:
        a) El informe descriptivo de las condiciones normales de operación, en las cuales se realizó la
        evaluación de los niveles de iluminación, incluyendo las descripciones del proceso, instalaciones,
        puestos de trabajo y el número de trabajadores expuestos por área y puesto de trabajo;
        b) La distribución del área evaluada, en el que se indique la ubicación de los puntos de medición;
        c) Los resultados de la evaluación de los niveles de iluminación indicando su incertidumbre;
        d) La comparación e interpretación de los resultados obtenidos, contra lo establecido en las Tablas 1 y
        2 de los Capítulos 7 y 9, respectivamente;
        e) La hora en que se efectuaron las mediciones;
        f) El programa de mantenimiento;
        g) La copia del documento que avale la calibración del luxómetro expedida por un laboratorio acreditado
        y aprobado conforme a lo establecido en la Ley Federal sobre Metrología y Normalización, y que
        cumpla con las disposiciones estipuladas en esta Norma;
        h) La conclusión técnica del estudio;
        i) Las medidas de control a desarrollar y el programa de implantación;
        j) Nombre y firma del responsable del estudio, y
        k) Los resultados de las evaluaciones hasta cumplir con lo establecido en las Tablas 1 y 2 de los
        Capítulos 7 y 9, respectivamente. ',
            'tipo' => '12. Reporte del estudio',
            'frecuencia' => ' ',
            'norm_id' => 9,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-006
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-006-STPS-2014',
            'titulo' => 'Manejo y almacenamiento de materiales-Condiciones de seguridad y salud en el trabajo.',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-006.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Contar con procedimientos para realizar las actividades de manejo y almacenamiento de materiales en forma manual, que contemplen el apoyo de equipos auxiliares, en su caso. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Realizar las actividades de manejo y almacenamiento de materiales: a) A través del uso de maquinaria, de conformidad con lo establecido por el Capítulo 7 de esta Norma, y/o b) De modo manual, con o sin el apoyo de equipos auxiliares, con base en lo que prevé el Capítulo 8 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'Cumplir con las medidas y condiciones de seguridad para realizar las actividades de almacenamiento, determinadas por el Capítulo 9 de esta Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => ' Supervisar que el manejo y almacenamiento de materiales se realice en condiciones seguras, conforme a los procedimientos de seguridad a que se refieren los numerales 5.2, 5.3 y 9.1 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Proporcionar a los trabajadores el equipo de protección personal requerido para las actividades de manejo y almacenamiento de materiales, de acuerdo con los riesgos a que están expuestos, y de conformidad con lo que señala la NOM-017-STPS-2008, o las que la sustituyan',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => ' Efectuar la vigilancia a la salud de los trabajadores que llevan a cabo el manejo y almacenamiento de materiales, expuestos a sobreesfuerzo muscular o postural, conforme a lo dispuesto por el Capítulo 10 de esta Norma',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => ' Informar a los trabajadores sobre los riesgos a que están expuestos en el manejo y almacenamiento de materiales. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => 'Capacitar y adiestrar a los trabajadores involucrados en el manejo y almacenamiento de materiales, de acuerdo con su actividad o puesto de trabajo, y de conformidad con lo que establece el Capítulo 11 de la presente Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' En los centros de trabajo donde se realicen actividades de manejo y almacenamiento de materiales mediante la carga manual, se deberá contar con procedimientos de seguridad que consideren, al menos, lo siguiente: a) Las características de los trabajadores involucrados en estas tareas, tales como: género, edad, peso, complexión y antecedentes patológicos de deformidades físicas o de lesiones que puedan limitar la capacidad de carga manual; b) El peso, forma, dimensiones y presencia de aristas cortantes o vértices puntiagudos, de los materiales o contenedores por manejar; c) La intensidad, distancia, repetición, frecuencia, duración, posturas y premura con la que deberán efectuarse las actividades de carga y traslado manual; d) La posición de los materiales o contenedores a manejar, con respecto a la de los trabajadores: levantamiento o descenso de la carga al piso, o a una cierta altura; e) Los elementos de sujeción de los materiales o contenedores -facilidad de agarre, sujeción y traslado de los materiales o contenedores-, y visibilidad que el volumen de la carga permite al trabajador; f) Las condiciones del ambiente que puedan incrementar el esfuerzo del trabajador, tales como condiciones de intemperie: exposición a radiación solar, temperatura y/o condiciones de humedad ambiental extremas, ambiente contaminado, lluvia, nevada o presencia de fuertes vientos; g) La trayectoria para el transporte de las cargas, subiendo o bajando escaleras, rampas inclinadas, plataformas, vehículos, tránsito sobre superficies resbalosas o con obstáculos que puedan generar riesgo de caídas, y h) El manejo de materiales peligrosos, tales como: tóxicos, irritantes, corrosivos, inflamables, explosivos, reactivos, con riesgo biológico, entre otros.',
            'tipo' => '8. Manejo y almacenamiento de materiales de modo manual  ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => ' Las actividades de manejo y almacenamiento de materiales a través de la carga manual, se deberá realizar sólo por trabajadores que cuenten con aptitud física avalada por un médico. ',
            'tipo' => '8. Manejo y almacenamiento de materiales de modo manual  ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3',
            'descripcion' => ' Las mujeres en estado de gestación, y durante las primeras 10 semanas posteriores al parto, no deberán realizar actividades de manejo y almacenamiento de materiales por medio de la carga manual. ',
            'tipo' => '8. Manejo y almacenamiento de materiales de modo manual  ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4',
            'descripcion' => 'El patrón deberá adoptar medidas preventivas, a fin de evitar lesiones a los trabajadores por sobreesfuerzo muscular o posturas forzadas o repetitivas.',
            'tipo' => '8. Manejo y almacenamiento de materiales de modo manual  ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5',
            'descripcion' => ' En las actividades de manejo y almacenamiento de materiales de manera manual se deberán adoptar las medidas de seguridad siguientes: a) Supervisar que se realicen en condiciones seguras, con base en los procedimientos a que alude el numeral 8.1, de esta Norma; b) Conservar en condiciones seguras los equipos auxiliares utilizados en el manejo de materiales; c) Mantener las áreas de tránsito y de trabajo libres de obstáculos; d) Utilizar barras u otros medios cuando se desplacen objetos pesados mediante rodillos para que el trabajador no entre en contacto con la carga en movimiento; e) Verificar que la carga manual máxima que manejen los trabajadores no rebase: 1) 25 kg para hombres; 2) 10 kg tratándose de mujeres, y 3) 7 kg en el caso de menores de 14 a 16 años.  Los trabajadores a que se refiere el subinciso 1), podrán manejar una carga superior a 25 kg, que no exceda de 50 kg, siempre y cuando el patrón determine en el procedimiento previsto en el numeral 8.1, las condiciones conforme a las cuales se desarrollará la actividad, de tal manera que no represente un riesgo para su salud; f) Proporcionar la ropa y el equipo de protección personal, conforme a lo previsto por la NOM-017STPS-2008, o las que la sustituyan, a los trabajadores que realicen actividades de carga de: 1) Materiales o contenedores con aristas cortantes, rebabas, astillas, puntas agudas, clavos u otros salientes peligrosos; 2) Materiales con temperaturas extremas, y/o 3) Contenedores con sustancias irritantes, corrosivas o tóxicas; g) Ubicar al menos un trabajador por cada 4 metros o fracción del largo de la carga por manipular, cuando su longitud sea mayor a dicha distancia; h) Trasladar los barriles o tambos, a través del uso de maquinaria o equipo auxiliar, como diablos, patines o carretillas; i) Efectuar el manejo manual de materiales cuyo peso o longitud sea superior a lo que determina la presente Norma, e integrar grupos de carga y asegurar que exista coordinación entre los miembros de éstos; j) Realizar el manejo manual de materiales al menos con dos trabajadores, cuando su peso sea mayor de 200 kg y se utilicen diablos o patines; k) Asegurar la estabilidad de la carga durante su traslado; l) Instruir al trabajador para que jale el diablo, patín o carretilla en el mismo sentido del ascenso al subir una pendiente, y en sentido opuesto al del descenso al bajar, con el objeto de evitar que la carga represente un riesgo, y m) Colocar un tope en la zona de descarga cuando se bascule una carretilla para descargarla al borde de una zanja',
            'tipo' => '8. Manejo y almacenamiento de materiales de modo manual  ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => ' Para el almacenamiento de materiales se deberá contar con procedimientos de seguridad, que al menos consideren lo siguiente: a) La forma segura de llevar a cabo las operaciones de estiba y desestiba con y sin el empleo de maquinaria; b) La técnica empleada para apilar y retirar los materiales o contenedores de los elementos estructurales, estantes o plataformas; c) La altura máxima de las estibas, de acuerdo con las características de los materiales y del área de almacenamiento; ',
            'tipo' => '9. Almacenamiento de materiales ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => ' Los centros de trabajo deberán disponer de espacios específicos para el almacenamiento de materiales. ',
            'tipo' => '9. Almacenamiento de materiales',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.3',
            'descripcion' => 'Las áreas de almacenamiento de materiales deberán contar con: a) Orden y limpieza; b) Pisos firmes; nivelados, llanos y de resistencia mecánica, con base en el peso de las estibas que soportarán; c) Delimitación de las zonas de almacenamiento; d) Pasillos de circulación con anchos en función de la técnica utilizada para la colocación y extracción de los materiales, conforme a: 1) El mayor ancho de la maquinaria o carga que circulen por ellos, y 2) La dimensión más amplia de los materiales, contenedores o cajas; e) Ventilación de acuerdo con el tipo de materiales por almacenar; f) Niveles de iluminación requeridos para las actividades por desarrollar, de conformidad con lo señalado por la NOM-025-STPS-2008, o las que la sustituyan; g) Avisos sobre la capacidad máxima de carga; número máximo de productos, contendores o cajas por estibar en los estantes; elementos estructurales o plataformas, según aplique; h) Señalización, con base en lo que dispone la NOM-026-STPS-2008, o las que la sustituyan, que indique: 1) La altura máxima de las estibas; 2) El equipo de protección personal a utilizar; 3) La velocidad máxima de circulación de los vehículos, en su caso; 4) Las rutas de evacuación y salidas de emergencia, y 5) Los sistemas de alarma, contra incendio y de emergencia; i) Espejos convexos, donde la altura de los materiales sea superior a 1.8 metros, en los cruces de corredores, pasillos o calles, donde circulen vehículos empleados para el manejo de materiales, y j) Medios físicos en el piso para reducir su velocidad, en su caso',
            'tipo' => '9. Almacenamiento de materiales',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.4',
            'descripcion' => 'Para el almacenamiento de materiales se deberán cumplir las condiciones de seguridad siguientes: a) Asegurar que los elementos estructurales, estantes o plataformas cuenten con la capacidad para soportar las cargas fijas o móviles, de tal manera que su resistencia evite posibles fallas estructurales y riegos de impacto; b) Establecer la altura máxima de las estibas, en función de la resistencia mecánica, forma y dimensiones de los materiales y, en su caso, de los envases o empaques, así como la forma de colocarlos, con la finalidad de asegurar su estabilidad; c) Evitar que las estibas: 1) Bloqueen la iluminación y la ventilación del local o edificio, y 2) Impidan el acceso a las rutas de evacuación y salidas de emergencia, así como a los sistemas de alarma; equipos contra incendio y de rescate, entre otros, previstos para casos de emergencia; d) Disponer de elementos estructurales, estantes o plataformas: 1) Con elementos de sujeción a las estructuras del edificio o local donde se ubiquen, en su caso, y 2) Con una relación base-altura que ofrezca la estabilidad, conforme al peso de los materiales y los esfuerzos a que serán sometidos; e) Contar con protecciones de al menos 30 centímetros de altura y resistentes para absorber golpes, pintadas de color amarillo o amarillo con franjas negras, de modo que se resalte su ubicación en las esquinas exteriores de los elementos estructurales, estantes o plataformas por donde circulen vehículos; f) Colocar en la parte posterior de los elementos estructurales, estantes o plataformas, de altura mayor a 1.8 metros, elementos que impidan que los materiales puedan desprenderse o caer; g) Apilar los materiales de manera tal que siempre se coloquen los de mayor peso en la parte inferior; h) Realizar la desestiba de materiales desde la parte superior, a efecto de no comprometer la estabilidad del apilamiento; i) Colocar calzas en la capa inferior, cuando se apilen materiales o contenedores cilíndricos tendidos horizontalmente, para evitar deslizamientos accidentales; j) Prohibir que los materiales sobresalgan con aristas filosas o puntiagudas hacia los pasillos de tránsito; 
        k) Impedir que los materiales se recarguen en las paredes de los edificios o locales, y 
        l) Prohibir que se carguen materiales en elementos estructurales, estantes o plataformas que se encuentren dañados o que estén sujetos a mantenimiento.',
            'tipo' => '9. Almacenamiento de materiales',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.5',
            'descripcion' => ' Previo al almacenamiento de materiales se deberán efectuar revisiones a los elementos estructurales, estantes o plataformas, para identificar: a) Condiciones inseguras o daños; b) Caída de materiales o elementos de los materiales sobre pasillos o zonas de trabajo; c) Deformación de los elementos estructurales, estantes o plataformas; d) Modificaciones o improvisaciones en dichos elementos, sin consultar con el fabricante o las especificaciones de diseño, y e) Inestabilidad con motivo de fallas del suelo. ',
            'tipo' => '9. Almacenamiento de materiales',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => ' La vigilancia a la salud de los trabajadores se deberá realizar por medio de un programa que para tal efecto se elabore. ',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.2',
            'descripcion' => ' El programa para la vigilancia a la salud de los trabajadores deberá ser dirigido a trabajadores que realizan actividades de manejo y almacenamiento de materiales en forma manual, expuestos a sobreesfuerzo muscular o postural. ',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.3',
            'descripcion' => ' Por cada trabajador que realiza actividades de manejo y almacenamiento de materiales de modo manual, se deberá contar con la historia clínica laboral. ',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.4',
            'descripcion' => ' El programa para la vigilancia a la salud de los trabajadores deberá considerar al menos, lo siguiente: 
        a) La aplicación de exámenes médicos de ingreso para integrar la historia clínica laboral; 
        b) La práctica de exámenes médicos de acuerdo con la actividad específica de los trabajadores, sujeta al seguimiento clínico anual o a la evidencia de signos o síntomas que denoten alteración de la salud de los trabajadores. 
         Los exámenes médicos deberán efectuarse de conformidad con lo establecido por las normas oficiales mexicanas que al respecto emitan la Secretaría de Salud y/o la Secretaría del Trabajo y Previsión Social, y a falta de éstas, los que indique el médico de la empresa, institución privada, de seguridad social o de salud, que le preste el servicio médico al centro de trabajo, y 
        c) La aplicación de las acciones preventivas y correctivas para la vigilancia a la salud de los trabajadores, deberá realizarse con base en los factores de riesgo detectados y los resultados de los exámenes médicos practicados.',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.5',
            'descripcion' => 'La vigilancia a la salud de los trabajadores deberá ser efectuada por un médico.',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.6',
            'descripcion' => ' Los exámenes médicos practicados y su registro, así como las acciones preventivas y correctivas para la vigilancia a la salud de los trabajadores, se integrarán en un expediente clínico que deberá conservarse por un periodo mínimo de cinco años.',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.7',
            'descripcion' => 'El médico deberá determinar la aptitud física de los trabajadores para realizar actividades de manejo y almacenamiento de materiales de manera manual.',
            'tipo' => '10. Vigilancia a la salud de los trabajadores ',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.1',
            'descripcion' => 'A los trabajadores de nuevo ingreso se les deberá proporcionar un curso de inducción sobre las condiciones generales de seguridad y salud en el trabajo que deberán cumplirse en las actividades de manejo y almacenamiento de materiales y las áreas en que se efectúen éstas, tanto las realizadas en forma manual como mediante el uso de maquinaria. ',
            'tipo' => '11. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.2',
            'descripcion' => ' A los trabajadores involucrados en el manejo y almacenamiento de materiales a través del uso de maquinaria se les deberá proporcionar capacitación, con énfasis en la prevención de riesgos, conforme a las tareas asignadas, y sobre el procedimiento de atención a emergencias. En la guía de referencia I, se sugieren algunos de los aspectos a considerar en la capacitación para los operadores de grúas. ',
            'tipo' => '11. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.3',
            'descripcion' => 'A los trabajadores que realicen actividades de manejo y almacenamiento de materiales de modo manual, se les deberá capacitar y adiestrar sobre la manera segura de efectuar este tipo de actividades, así como el contenido de esta Norma aplicables a éstas. ',
            'tipo' => '11. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.6',
            'descripcion' => ' Los centros de trabajo deberán llevar el registro de la capacitación y adiestramiento que proporcionen a los trabajadores, el cual deberá contener, al menos, lo siguiente: a) El nombre y puesto de los trabajadores a los que se les proporcionó; b) La fecha en que se proporcionó la capacitación; c) Los temas impartidos, y d) El nombre del instructor y, en su caso, número de registro como agente capacitador ante la Secretaría del Trabajo y Previsión Social. ',
            'tipo' => '11. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 10,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-006
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-015-STPS-2001',
            'titulo' => 'Condiciones térmicas elevadas o abatidas-Condiciones de
        seguridad e higiene. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-015.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Informar a los trabajadores de los riesgos de trabajo por exposición a temperaturas extremas y mostrar
        a la autoridad del trabajo evidencias como pueden ser las constancias de habilidades, circulares, folletos,
        carteles, o a través de opiniones de los trabajadores, que acrediten que han sido informados de los riesgos. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Realizar el reconocimiento, evaluación y control, según lo establecido en el Capítulo 7. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Elaborar por escrito y mantener actualizado un informe que contenga el registro del reconocimiento,
        evaluación y control de las áreas, de acuerdo a lo establecido en el Capítulo 11. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Señalar y restringir el acceso a las áreas de exposición a condiciones térmicas extremas, según lo
        establecido en la NOM-026-STPS-1998. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Proporcionar capacitación y adiestramiento al POE en materia de seguridad e higiene, donde se
        incluyan los niveles máximos permisibles y las medidas de control establecidas en el Apartado 5.3, de acuerdo
        a la actividad que desempeñen, a fin de evitar daños a la salud, derivados de la exposición a condiciones
        térmicas extremas. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Llevar a cabo la vigilancia a la salud del POE, según lo que establezcan las normas oficiales
        mexicanas que al respecto emita la Secretaría de Salud. En caso de no existir normatividad de dicha
        Secretaría, el médico de la empresa determinará el contenido de los exámenes médicos y la vigilancia a la
        salud, según lo establecido en el Apéndice B. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => ' En los centros de trabajo en que las condiciones climáticas pueden provocar que la temperatura
        corporal del trabajador sea inferior a 36°C o superior a 38°C, cumplir únicamente con lo establecido en los
        Apartados 5.1, 5.2, 5.6 y 5.9. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => 'Reconocimiento.',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.1',
            'descripcion' => ' Identificar y registrar en un plano de vista de planta del centro de trabajo, todas las fuentes que
        generen condiciones térmicas extremas. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.2',
            'descripcion' => 'Determinar si en el área donde se ubican las fuentes, el POE se localiza en un lugar cerrado o
        abierto y si existe ventilación natural o artificial.',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.3',
            'descripcion' => 'Elaborar una relación del POE, incluyendo áreas, puestos de trabajo, tiempos y frecuencia de la
        exposición',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.4',
            'descripcion' => 'Describir las actividades y ciclos de trabajo que realiza el POE en cada puesto de trabajo.',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Evaluación.',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.1',
            'descripcion' => 'Aplicar el procedimiento de evaluación para las condiciones térmicas extremas encontradas,
        conforme a lo establecido en los capítulos 9 o 10, según sea el caso',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.2',
            'descripcion' => 'Medir la temperatura axilar del POE al inicio y al término de cada ciclo de exposición. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.3',
            'descripcion' => 'Con la información obtenida en el Apartado 7.1.4, en caso de exposición a condiciones térmicas
        elevadas, determinar el régimen de trabajo del POE, según lo establecido en la Tabla A1. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2.4',
            'descripcion' => 'Registrar en una hoja de campo o sistema electrónico, por cada trabajador expuesto o grupo de
        exposición homogénea a condiciones térmicas extremas, los siguientes datos:
        a) área evaluada;
        b) condición térmica extrema evaluada;
        c) fecha de la evaluación;
        d) nombre del trabajador o grupo evaluado;
        e) puesto de trabajo evaluado;
        f) tiempo y ciclos de exposición;
        g) actividades específicas que realiza el POE en cada ciclo de exposición;
        h) si se utiliza equipo de protección personal, describirlo;
        i) si existen controles técnicos o administrativos, describirlos;
        j) en caso de utilizar equipo de medición electrónico registrar:
        1) marca y modelo;
        2) número de serie;
        3) documento que avale la calibración de los instrumentos de medición, de conformidad con los
        procedimientos establecidos en la Ley Federal sobre Metrología y Normalización;
        k) nombre y firma del evaluador. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3.1',
            'descripcion' => '1 Cuando el resultado del índice de temperatura de globo bulbo húmedo (Itgbh) o el índice de viento frío
        (Ivf), el régimen de trabajo y el tiempo de exposición, indiquen que la exposición de los trabajadores excede los
        LMPE establecidos en las tablas 1 o 2, o la temperatura axilar del trabajador supere los 38°C o esté por abajo
        de 36°C, se deben aplicar medidas de control, a fin de prevenir daños a la salud del POE. En tanto se
        establezcan dichas medidas de control, los patrones deben adoptar medidas preventivas inmediatas que
        garanticen que no se sigan presentando este tipo de exposiciones, tomando en consideración lo siguiente:
        a) las características fisiológicas de los trabajadores expuestos;
        b) el régimen de trabajo, nivel, tiempo y frecuencia de la exposición;
        c) las características de los lugares donde se realiza el trabajo;
        d) las características del proceso;
        e) las características de las fuentes;
        f) las condiciones climatológicas del lugar, por área geográfica y estacionalidad. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3.2',
            'descripcion' => ' Las medidas de control y las medidas preventivas inmediatas mencionadas en el apartado anterior,
        deben registrarse en el informe establecido en el Capítulo 11, según sea el caso, y deben ser verificadas por
        el patrón mediante una evaluación posterior al término de su implementación. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3.6',
            'descripcion' => 'En las áreas o puestos de trabajo donde el índice de viento frío sea inferior a -57°C, todo el cuerpo
        del POE debe contar con equipo de protección personal que lo mantenga aislado de las condiciones térmicas
        abatidas y equipado con un tubo de respiración que pase bajo la ropa y bajo la pierna para calentar el aire. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3.8',
            'descripcion' => 'Cuando la temperatura corporal sea igual o menor a 36°C, se debe retirar de la exposición al POE y
        someterlo a vigilancia médica. ',
            'tipo' => '7. Reconocimiento, evaluación y control ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11',
            'descripcion' => 'Los registros de las condiciones térmicas extremas deben de contener, al menos, lo siguiente:
        a) informe descriptivo de las condiciones de operación bajo las cuales se realizó la evaluación;
        b) plano de distribución de las zonas, áreas y departamentos evaluados en el que se indique la
        ubicación de las fuentes, los puntos de medición y el POE;
        c) la temperatura axilar del POE;
        d) los informes del reconocimiento, evaluación y control, señalados en el Capítulo 7;
        e) las medidas preventivas de seguridad e higiene para proteger al POE;
        f) nombre y firma del responsable del estudio de evaluación. ',
            'tipo' => '11. Registros ',
            'frecuencia' => ' ',
            'norm_id' => 11,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-020
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-020-STPS-2011',
            'titulo' => 'Recipientes sujetos a presión, recipientes criogénicos y generadores de vapor o calderas - Funcionamiento - Condiciones de Seguridad. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-020.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => ' Clasificar a los equipos instalados en el centro de trabajo en las categorías I, II ó III, de conformidad con lo previsto en el Capítulo 7 de la presente Norma',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Contar con un listado actualizado de los equipos que se encuentren instalados en el centro de trabajo, de acuerdo con lo dispuesto en el Capítulo 8 de esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Disponer de un expediente por cada equipo que esté instalado en el centro de trabajo, conforme a lo establecido en el Capítulo 9 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Elaborar y aplicar programas específicos de revisión y mantenimiento para los equipos clasificados en las categorías II y III, con base en lo señalado en el Capítulo 10 de esta Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => 'Contar y aplicar procedimientos de operación, revisión y mantenimiento de los equipos, en idioma español, de conformidad con lo dispuesto por el Capítulo 11 de la presente Norma. Los procedimientos podrán ser elaborados por equipo o por conjunto de equipos interconectados o de aplicación común.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Realizar el mantenimiento y reparación de los equipos que no requieran soldadura, con personal capacitado en la materia. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => ' Realizar las reparaciones de los equipos que requieran soldadura o alteraciones, de acuerdo con los procedimientos desarrollados para tal fin y con personal calificado.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Cumplir con las condiciones de seguridad de los equipos, según aplique, de acuerdo con lo establecido en el Capítulo 12 de esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => 'Determinar y practicar pruebas de presión o exámenes no destructivos a los equipos clasificados en las categorías II y III, conforme a lo señalado en el Capítulo 13 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => 'Demostrar que los dispositivos de relevo de presión de los equipos se encuentran en condiciones de funcionamiento, con base en lo dispuesto por el Capítulo 14 de esta Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.12',
            'descripcion' => ' Contar con un plan de atención a emergencias para los equipos clasificados en las categorías II y III, de conformidad con lo que determina el Capítulo 15 de la presente Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.14',
            'descripcion' => 'Informar a los trabajadores y a la comisión de seguridad e higiene sobre los peligros y riesgos inherentes a los equipos y a los fluidos que contienen.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.15',
            'descripcion' => 'Capacitar al personal que realiza actividades de operación, mantenimiento, reparación y pruebas de presión o exámenes no destructivos a equipos clasificados en las categorías II y III, en las materias que les sean aplicables, conforme a lo establecido en el Capítulo 17 de la presente Norma.',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.16',
            'descripcion' => 'Contar con los registros de operación de los equipos instalados en el centro de trabajo, clasificados en las categorías II y III, de acuerdo con lo que determina el Capítulo 18 de esta Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.17',
            'descripcion' => ' Contar con los registros de resultados de la revisión, mantenimiento y pruebas de presión o exámenes no destructivos realizados a los equipos clasificados en las categorías II y III, con base en lo dispuesto en el Capítulo 18 de la presente Norma. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.1',
            'descripcion' => ' Presión de calibración en su(s) dispositivo(s) de relevo de presión. a) Categoría I:  Los recipientes sujetos a presión que contengan agua, aire y/o cualquier fluido no peligroso, con presión de calibración menor o igual a 490.33 kPa y un volumen menor o igual a 0.5 m3. b) Categoría II: Los recipientes sujetos a presión que: 1) Contengan agua, aire y/o cualquier fluido no peligroso, con presión de calibración menor o igual a 490.33 kPa y un volumen mayor a 0.5 m3, o 2) Contengan agua, aire y/o cualquier fluido no peligroso, con presión de calibración mayor a 490.33 kPa pero menor o igual a 784.53 kPa y un volumen menor o igual a 1 m3, o 3) Manejen fluidos peligrosos, con presión de calibración menor o igual a 686.47 kPa y un volumen menor o igual a 1 m3. c) Categoría III: Los recipientes sujetos a presión que: 1) Contengan agua, aire y/o cualquier fluido no peligroso, con presión de calibración mayor a 490.33 kPa pero menor o igual a 784.53 kPa, y volumen mayor a 1 m3, o 2) Contengan agua, aire y/o cualquier fluido no peligroso, con presión de calibración mayor de 784.53 kPa y cualquier volumen, o 3) Manejen fluidos peligrosos con presión de calibración menor o igual a 686.47 kPa y volumen mayor a 1 m3, o 4) Manejen fluidos peligrosos con presión de calibración mayor a 686.47 kPa y cualquier volumen.',
            'tipo' => '7. Clasificación de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.3',
            'descripcion' => 'Presión de calibración sobre la primera válvula de seguridad. a) Categoría II:  Los generadores de vapor o calderas que tengan una presión de calibración menor o igual a 490.33 kPa y una capacidad térmica menor o igual a 1 674.72 MJ/hr. b) Categoría III:  Los generadores de vapor o calderas que: 1) Tengan una presión de calibración menor o igual a 490.33 kPa y una capacidad térmica mayor a 1 674.72 MJ/hr, o 2) Tengan una presión de calibración mayor a 490.33 kPa y cualquier capacidad térmica.',
            'tipo' => '7. Clasificación de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' El listado de los equipos que se encuentren instalados en el centro de trabajo, deberán contener lo siguiente: a) El nombre genérico del equipo; b) El número de serie o único de identificación, la clave del equipo o número de TAG; c) La clasificación que corresponde a cada equipo, conforme al Capítulo 7 de esta Norma; d) El(los) fluido(s) manejado(s); e) La presión de calibración, en su caso; f) La capacidad volumétrica, en el caso de recipientes sujetos a presión y recipientes criogénicos; g) La capacidad térmica, en el caso de generadores de vapor o calderas; h) El área de ubicación del equipo; i) El número de dictamen o dictamen con reporte de servicios, emitido por una unidad de verificación, cuando se trate de los equipos clasificados en la Categoría III, y j) El número de control asignado por la Secretaría, a que se refiere el numeral 16.5 de la presente Norma, tratándose de los equipos clasificados en la Categoría III.',
            'tipo' => '8. Listado de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => 'El expediente de cada uno de los equipos clasificados en la Categoría I, que se encuentren instalados en el centro de trabajo, deberá contener lo siguiente: a) El nombre genérico del equipo; b) El número de serie o único de identificación, la clave del equipo o número de TAG; c) La ficha técnica del equipo, que al menos considere: 1) El(los) fluido(s) manejado(s) y su tipo de riesgo, en su caso; 2) La(s) presión(es) de diseño; 3) La(s) presión(es) de operación; 4) La(s) presión(es) de calibración, en su caso; 5) La(s) presión(es) de trabajo máxima(s) permitida(s); 6) La capacidad volumétrica; 7) La(s) temperatura(s) de diseño, y 8) La(s) temperatura(s) de operación; d) La descripción breve de su operación; e) El registro de los resultados de las revisiones y mantenimientos efectuados, y f) La ubicación del equipo. ',
            'tipo' => '9. Expediente de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => 'El expediente de cada uno de los equipos clasificados en la Categoría II, que se encuentren instalados en el centro de trabajo, deberá contener, según aplique, lo siguiente: a) El nombre genérico del equipo; b) El número de serie o único de identificación, la clave del equipo o número de TAG; c) El año de fabricación; d) El código o norma de construcción aplicable; e) El certificado de fabricación, cuando exista; f) La ficha técnica del equipo, que al menos considere: 1) El(los) fluido(s) manejado(s) y su tipo de riesgo, en su caso; 2) La(s) presión(es) de diseño; 3) La(s) presión(es) de operación; 4) La(s) presión(es) de calibración, en su caso; 5) La(s) presión(es) de trabajo máxima(s) permitida(s); 6) La(s) presión(es) de prueba hidrostática; 7) La capacidad volumétrica, en el caso de recipientes sujetos a presión y recipientes criogénicos; 8) La capacidad térmica, en el caso de generadores de vapor o calderas; 9) La(s) temperatura(s) de diseño, y 10) La(s) temperatura(s) de operación; g) La descripción breve de su operación; h) El registro de los resultados de las revisiones y mantenimientos efectuados; i) El registro de la última prueba de presión o exámenes no destructivos practicados a los equipos; j) El registro de las modificaciones y alteraciones efectuadas; k) El registro de las reparaciones que implicaron soldadura; l) El dibujo, plano simple o documento (libro de proyecto, manual o catálogo) del equipo, y m) El croquis de localización del (los) equipo(s) fijo(s) dentro del centro de trabajo, y tratándose de equipos móviles, la bitácora de ubicación. ',
            'tipo' => '9. Expediente de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.1',
            'descripcion' => 'Para la operación.',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.1.1',
            'descripcion' => ' Para los equipos clasificados en la Categoría I, se deberá contar con las instrucciones o procedimientos correspondientes. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.1.2',
            'descripcion' => 'Para los equipos clasificados en la Categoría II, se deberá contar con el manual de operación, que considere, al menos, lo siguiente: a) El arranque y paro seguro de los equipos; b) Las medidas de seguridad por adoptar durante su funcionamiento; c) La atención de situaciones de emergencia, y d) El registro de las variables de operación de los equipos. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.2',
            'descripcion' => ' Para la revisión. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.2.1',
            'descripcion' => ' Para los equipos clasificados en la Categoría I, se deberá contar con las instrucciones o procedimientos correspondientes. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.2.2',
            'descripcion' => 'Para los equipos clasificados en las categorías II y III, se deberá contar con el manual de revisión que contenga, al menos, lo siguiente: a) El listado de verificación para la operación y mantenimiento del equipo; b) La constatación del cumplimiento de las condiciones de seguridad generales y específicas, según aplique, de conformidad con lo establecido en el Capítulo 12 de la presente Norma; c) La comprobación de la ejecución de las pruebas a los dispositivos de relevo de presión, así como pruebas de presión o exámenes no destructivos y pruebas de funcionamiento a los equipos, cada cinco años o después de realizada una reparación o alteración, y d) Los criterios para determinar si el equipo puede continuar o no en operación',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.3',
            'descripcion' => 'Para el mantenimiento. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.3.1',
            'descripcion' => 'Para los equipos clasificados en la Categoría I, se deberá contar con las instrucciones o procedimientos correspondientes',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '11.3.2',
            'descripcion' => ' Para los equipos clasificados en la Categoría II, se deberá contar con el manual de mantenimiento que considere al menos: a) El alcance del mantenimiento; b) Las medidas de seguridad por adoptar durante su ejecución; c) El equipo de protección personal o colectiva a utilizarse para cada tipo de actividad de trabajo; d) Los aparatos, instrumentos y herramientas por utilizar, y e) Los permisos de trabajo requeridos, en su caso. ',
            'tipo' => '11. Procedimientos para la operación, revisión y mantenimiento de los equipos',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.1',
            'descripcion' => 'Condiciones generales.',
            'tipo' => '12. Condiciones de seguridad de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.1.1',
            'descripcion' => 'Para los equipos clasificados en la Categoría I, se deberá cumplir con lo siguiente: a) Tener marcado o pintado el número de serie o único de identificación, clave o número de TAG; b) Contar con el manómetro y, en su caso, con los instrumentos de control; c) Mantener sus instrumentos de control en condiciones seguras de operación; d) Contar con el dispositivo de relevo de presión, y e) Disponer de espacio suficiente para su operación, revisión y, en su caso, realización de las maniobras de mantenimiento, de conformidad con el manual de fabricación o recomendaciones del instalador. ',
            'tipo' => '12. Condiciones de seguridad de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.1.2',
            'descripcion' => ' Para los equipos clasificados en las categorías II y III, se deberá cumplir con lo siguiente: a) Tener marcado o pintado el número de serie o único de identificación, clave o número de TAG; b) Contar con protecciones físicas, como barreras de contención o cercas perimetrales, entre otras, en el caso de los que se encuentren en áreas o zonas en donde puedan estar expuestos a golpes de vehículos; c) Mantener su sistema de soporte o de cimentación en condiciones tales que no se afecte su operación; d) Disponer del espacio requerido para la operación de los equipos y, en su caso, la realización de las maniobras de mantenimiento, pruebas de presión y/o exámenes no destructivos. Las dimensiones mínimas serán equivalentes a las del elemento que más espacio requiera (tubos, tapas, mamparas, quemadores u otros componentes), y a las maniobras consideradas en el mantenimiento, pruebas de presión y/o exámenes no destructivos; e) Contar con elementos de protección física o aislamiento, para evitar riesgos en los trabajadores por contacto con temperaturas extremas; f) Estar señalizados para identificar los fluidos que contienen, de conformidad con lo dispuesto por las normas oficiales mexicanas NOM-018-STPS-2000 y NOM-026-STPS-2008, o las que las sustituyan; g) Estar conectados a una tierra física, cuando se trate de equipos que contengan o manejen líquidos y/o gases inflamables, de acuerdo con lo previsto por la NOM-022-STPS-2008, o las que la sustituyan; h) Mantener sus instrumentos de control en condiciones seguras de operación; i) Contar con elementos que dirijan el desahogo de sus fluidos a través de dispositivos de relevo de presión, acordes con el estado de los fluidos -gases, vapores o líquidos-, a lugares donde no dañen a trabajadores ni al centro de trabajo, de conformidad con lo establecido en el Apéndice B, inciso B6, de la NOM-093-SCFI-1994, o las que la sustituyan; j) Contar con medios de extinción de incendios, en los equipos que contengan o manejen líquidos o gases inflamables, o sustancias combustibles, conforme a lo establecido por la NOM-002-STPS2010, o las que la sustituyan; k) Estar sujetos a los programas de revisión y mantenimiento; l) Disponer de las hojas de datos de seguridad de los fluidos contenidos en los equipos, con base en lo previsto en la NOM-018-STPS-2000, o las que la sustituyan, y m) Mantener las condiciones originales de diseño de los sistemas de calentamiento, tales como quemador y/o combustible, en el caso de intercambiadores de calor, y generadores de vapor o calderas. ',
            'tipo' => '12. Condiciones de seguridad de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.2',
            'descripcion' => ' Condiciones específicas. ',
            'tipo' => '12. Condiciones de seguridad de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '12.2.3',
            'descripcion' => ' Para los generadores de vapor o calderas clasificados en las categorías II y III, se deberá cumplir con lo siguiente: a) Contar con los dispositivos de relevo de presión e instrumentos de control que registren los límites de operación segura; b) Tener calibrados sus dispositivos de seguridad de acuerdo con el programa de calibración, así como sujetarse a los de revisión y mantenimiento; c) Contar con instrumentos de medición de presión, y que el rango de medición se encuentre entre 1.5 y 4 veces la presión de operación, o en el segundo tercio de la escala de la carátula; d) Contar con dispositivos de relevo de presión instalados en el cuerpo y no en conexiones remotas; ',
            'tipo' => '12. Condiciones de seguridad de los equipos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.1',
            'descripcion' => ' Para los equipos nuevos clasificados en las categorías II y III, que cuenten con certificado de fabricación o el estampado de cumplimiento con el código o norma de construcción, la primera prueba de presión o los primeros exámenes no destructivos se deberán practicar antes de que se cumplan diez años de la emisión de dicho certificado o de haber obtenido el estampado, y las siguientes pruebas o exámenes al menos cada cinco años, dentro de los sesenta días naturales previos a la conclusión de cada quinquenio.',
            'tipo' => '13. Pruebas de presión y exámenes no destructivos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.2',
            'descripcion' => 'Las pruebas hidrostáticas, neumáticas, hidrostáticas-neumáticas, exámenes no destructivos y métodos alternativos aprobados por la Secretaría, que se realicen a los equipos clasificados en las categorías II y III, deberán cumplir con los requerimientos siguientes: a) Ser realizados con la periodicidad que determine el personal calificado en la materia designado por el patrón, la cual no deberá ser en ningún caso mayor de cinco años; b) Ser seleccionados con base en: 1) Los resultados de las revisiones a los equipos; 2) Las características de los fluidos que manejen, y 3) La factibilidad de su aplicación; c) Ser efectuados con apego a los requisitos y/o lineamientos establecidos en códigos o normas aceptados nacional o internacionalmente; d) Ser ejecutados con las medidas de seguridad requeridas antes, durante y después de su realización, según aplique; e) Ser desarrollados paso a paso con base en los procedimientos diseñados para su ejecución; f) Ser ejecutados por personal certificado, cuando se trate de ensayos no destructivos, y por un ingeniero con conocimientos en la materia, cuando se trate de pruebas de presión; g) Ser aplicados los criterios de aceptación/rechazo, a los resultados de las pruebas de presión y/o ensayos no destructivos; h) Servir de base para determinar, después de su ejecución, si los equipos evaluados pueden o no continuar en funcionamiento; i) Estar avalados sus resultados por personal certificado, mediante su nombre y firma, cuando se trate de exámenes no destructivos, y por un ingeniero con conocimientos en la materia, tratándose de pruebas de presión; j) Realizarse en presencia de una unidad de verificación tipo “A”, “B” o “C”, tratándose de los equipos clasificados en la Categoría III, y k) Registrar sus resultados. ',
            'tipo' => '13. Pruebas de presión y exámenes no destructivos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.3',
            'descripcion' => 'Las pruebas de presión neumáticas sólo deberán aplicarse a presiones menores de 1 961.33 kPa, cuando los recipientes sujetos a presión cumplan con las características siguientes: a) Que la calibración de su dispositivo de seguridad sea igual o menor a 980.67 kPa; b) Que la capacidad volumétrica sea menor a 10 m3; c) Que la presión interna máxima sea mayor de 1 961.33 kPa, tomando como referencia los espesores actuales del equipo, y d) Que el fluido sea únicamente aire.',
            'tipo' => '13. Pruebas de presión y exámenes no destructivos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.7',
            'descripcion' => ' En caso de aplicar métodos alternativos que sustituyan a las pruebas de presión o a los exámenes no destructivos previstos por la presente Norma, el patrón deberá contar con la autorización que, en su caso, otorga la Dirección General de Seguridad y Salud en el Trabajo, de conformidad con lo dispuesto por la Ley Federal sobre Metrología y Normalización y su Reglamento, y el Reglamento Federal de Seguridad, Higiene y Medio Ambiente de Trabajo',
            'tipo' => '13. Pruebas de presión y exámenes no destructivos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '13.7.1',
            'descripcion' => ' La solicitud de autorización de métodos alternativos, deberá contener, al menos, lo siguiente: a) La justificación técnica para solicitar la práctica de métodos alternativos al equipo; b) La metodología para su desarrollo, que contenga, al menos: 1) Los procedimientos, paso a paso, para llevar a cabo las pruebas; 2) La descripción de los utensilios, materiales, accesorios y características de los aparatos e instrumentos -con certificados vigentes de calibración-, que se usarán en el desarrollo del procedimiento; 3) El dibujo del equipo, con indicación gráfica de las zonas o puntos a inspeccionar cuando sea necesario, y 4) El personal designado por el patrón para desarrollar las pruebas e interpretar y evaluar los resultados, con la justificación de la experiencia o capacitación recibida para dichos trabajos; c) Los criterios para aceptar o rechazar los resultados obtenidos y que servirán de base para determinar si el método alternativo practicado resulta satisfactorio, y d) Las medidas de seguridad necesarias para desarrollar los procedimientos, en su caso',
            'tipo' => '13. Pruebas de presión y exámenes no destructivos ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.1',
            'descripcion' => 'Para demostrar que los dispositivos de relevo de presión de los equipos se encuentran en condiciones de operación, se deberá: a) Realizar la prueba de funcionamiento con instrumentos que cuenten con trazabilidad, de acuerdo a la Ley Federal sobre Metrología y Normalización, según aplique, en: 1) El propio equipo, o 2) Un banco de pruebas, cuando por las características de operación de los equipos o los fluidos contenidos en ellos puedan generar un riesgo, o b) Contar con un registro de calidad del fabricante o certificado de calibración emitido en términos de la Ley Federal sobre Metrología y Normalización.',
            'tipo' => '14. Funcionamiento de los dispositivos de relevo de presión',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.2',
            'descripcion' => 'Comprobar, para el funcionamiento del dispositivo principal de relevo de presión, los criterios siguientes: a) La presión de calibración deberá ser menor o igual a la presión máxima de trabajo permitida, y b) La presión de calibración deberá ser mayor a la presión de operación del equipo. ',
            'tipo' => '14. Funcionamiento de los dispositivos de relevo de presión',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.3',
            'descripcion' => 'Se deberá demostrar técnicamente que el (los) dispositivo(s) de relevo de presión protege(n) al (a los) equipo(s) que se encuentre(n) interconectado(s) con otros en un proceso, cuando el valor de la presión de calibración de dicho(s) dispositivo(s) esté por debajo del valor de la presión de operación de alguno de ellos. ',
            'tipo' => '14. Funcionamiento de los dispositivos de relevo de presión',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '14.4',
            'descripcion' => ' Los equipos clasificados en las categorías II y III que carezcan de dispositivos de relevo de presión deberán contar con una justificación técnica en su memoria de cálculo. ',
            'tipo' => '14. Funcionamiento de los dispositivos de relevo de presión',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '15',
            'descripcion' => 'El plan de atención a emergencias para los equipos clasificados en las categorías II y III deberá contemplar, al menos, lo siguiente: a) La identificación y localización de áreas, locales o edificios en donde se ubiquen los recipientes sujetos a presión, recipientes criogénicos y generadores de vapor o calderas; b) La identificación de las rutas de evacuación, salidas y escaleras de emergencia, zonas de menor riesgo y puntos de reunión, entre otros; c) El mecanismo de alertamiento, en caso de ocurrir una emergencia; d) Las instrucciones para la evacuación de los trabajadores, contratistas, patrones y visitantes, entre otros, considerando a las personas con discapacidad; e) El mecanismo de solicitud de auxilio a cuerpos especializados para la atención a la emergencia, considerando el directorio de dichos cuerpos especializados de la localidad; f) Las instrucciones para el retorno a actividades normales de operación, después de la emergencia, y g) Los medios de difusión del plan de atención a emergencias para los equipos.',
            'tipo' => '15. Plan de atención a emergencias ',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '17.1',
            'descripcion' => 'Los trabajadores que realicen actividades de operación, mantenimiento, reparación y pruebas de presión o exámenes no destructivos a equipos, deberán recibir entrenamiento teórico-práctico, según aplique, para: a) Definir e interpretar los conceptos siguientes: 1) Presión y temperatura de diseño y de operación; 2) Presión de trabajo máxima permitida; 3) Presión de calibración; 4) Capacidad volumétrica, en el caso de recipientes sujetos a presión y recipientes criogénicos; 5) Capacidad térmica, en el caso de generadores de vapor o calderas; 6) Dibujos o planos de los equipos, cortes principales del equipo, detalles relevantes, acotaciones básicas y arreglo básico del sistema de soporte; 7) Sistema de señalización para los equipos y tuberías; 8) Instrumentos de medición; 9) Dispositivos de relevo de presión; 10) Valores de los límites seguros de operación, y 11) Transitorios relevantes; b) Identificar las características de toxicidad, inflamabilidad y reactividad del fluido o fluidos manejados en el equipo; c) Reconocer y atender los riesgos generados por la presión y temperatura de los fluidos en el equipo; d) Mantener dentro del valor establecido los límites de operación del equipo y de cualquier dispositivo de relevo de presión o elemento de seguridad, así como de aquellas variables que los puedan afectar; e) Aplicar los procedimientos de operación, revisión, mantenimiento, reparación, alteración y pruebas de presión o exámenes no destructivos de los equipos, según aplique; f) Aplicar los procedimientos de revisión de los dispositivos de relevo de presión, elementos de seguridad e instrumentos de control, según aplique, incluyendo las operaciones de paro de emergencia, y g) Controlar los cambios de las condiciones de operación del equipo y/o de los fluidos que manejen.',
            'tipo' => '17. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '17.2',
            'descripcion' => 'La capacitación del personal que realice actividades de operación, mantenimiento, reparación y pruebas de presión o exámenes no destructivos a equipos que se encuentren en comodato, deberá ser proporcionada por el patrón propietario de este tipo de equipos, el cual deberá entregar copia de la documental respectiva al centro de trabajo donde se encuentren instalados.',
            'tipo' => '17. Capacitación',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '18.1',
            'descripcion' => 'Los registros sobre la operación de los equipos clasificados en las categorías II y III deberán contener, según aplique, la información siguiente: a) El nombre genérico del equipo; b) El número de control asignado por la Secretaría, en su caso; c) Las presiones de operación; d) Las temperaturas de operación; e) Las observaciones a que haya lugar, en su caso; f) La fecha y hora de los registros sobre la operación, y g) El nombre y firma del responsable.',
            'tipo' => '18. Registros',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '18.2',
            'descripcion' => 'Los registros sobre los resultados de la revisión a los equipos deberán comprender, según aplique, la información siguiente: a) El nombre genérico del equipo; b) El número de control asignado por la Secretaría, en su caso; c) Los elementos revisados; d) El resultado de la revisión; e) La fecha y hora de los registros sobre los resultados de la revisión, y f) El nombre y firma del responsable de la revisión. ',
            'tipo' => '18. Registros',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '18.3',
            'descripcion' => ' Los registros sobre los resultados del mantenimiento a los equipos deberán comprender, según
        aplique, la información siguiente:
        a) El nombre genérico del equipo;
        b) El número de control asignado por la Secretaría, en su caso;
        c) Los elementos sometidos a mantenimiento y las acciones realizadas;
        d) La fecha y hora de los registros sobre los resultados del mantenimiento, y
        e) El nombre y firma del responsable del mantenimiento.',
            'tipo' => '18. Registros',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '18.4',
            'descripcion' => 'Los registros sobre los resultados de las pruebas de presión y/o exámenes no destructivos a los
        equipos deberán comprender, según aplique, la información siguiente:
        a) El nombre genérico del equipo;
        b) El número de control asignado por la Secretaría, en su caso;
        c) El tipo de prueba de presión o de exámenes no destructivos realizados;
        d) Los equipos utilizados y sus características;
        e) Los resultados de la prueba de presión o de los exámenes no destructivos realizados;
        f) La fecha y hora de los registros sobre los resultados de las pruebas de presión o de los exámenes no
        destructivos realizados, y
        g) El nombre y firma del responsable de avalar los resultados de las pruebas de presión o exámenes no
        destructivos. ',
            'tipo' => '18. Registros',
            'frecuencia' => ' ',
            'norm_id' => 12,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-026
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-026-STPS-2008',
            'titulo' => 'Colores y señales de seguridad e higiene, e identificación de
        riesgos por fluidos conducidos en tuberías',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-026.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Colores y señales de seguridad e higiene, e identificación de
        riesgos por fluidos conducidos en tuberías',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => ' Garantizar que la aplicación del color, la señalización y la identificación de la tubería estén sujetos a un
        mantenimiento que asegure en todo momento su visibilidad y legibilidad. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Ubicar las señales de seguridad e higiene de tal manera que puedan ser observadas e interpretadas
        por los trabajadores a los que están destinadas, evitando que sean obstruidas o que la eficacia de éstas sea
        disminuida por la saturación de avisos diferentes a la prevención de riesgos de trabajo.
        Las señales deben advertir oportunamente al observador sobre:
        i) La ubicación de equipos o instalaciones de emergencia;
        ii) La existencia de riesgos o peligros, en su caso;
        iii) La realización de una acción obligatoria, o
        iv) La prohibición de un acto susceptible de causar un riesgo',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' Colores de seguridad.
        Los colores de seguridad, su significado y ejemplos de aplicación se establecen en la tabla 1 de la
        presente Norma.',
        'tipo' => '7. Colores de seguridad y colores contrastantes',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Colores contrastantes.
        Cuando se utilice un color contrastante para mejorar la percepción de los colores de seguridad, la
        selección del primero debe estar de acuerdo a lo establecido en la tabla 2. El color de seguridad debe cubrir al
        menos 50% del área total de la señal, excepto para las señales de prohibición, según se establece en el
        apartado 8.5.2. ',
        'tipo' => '7. Colores de seguridad y colores contrastantes',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => ' Formas geométricas.
        Las formas geométricas de las señales de seguridad e higiene y su significado asociado se establecen en
        la tabla 3. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => ' Símbolos de seguridad e higiene. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.1',
            'descripcion' => ' El color de los símbolos debe ser el mismo que el color contrastante, correspondiente a la señal de
        seguridad e higiene, excepto en las señales de seguridad e higiene de prohibición, que deben cumplir con el
        apartado 8.5.2. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.2',
            'descripcion' => ' Los símbolos que deben utilizarse en las señales de seguridad e higiene, deben cumplir con el
        contenido de imagen que se establece en los apéndices A, B, C, D y E, en los cuales se incluyen una serie de
        ejemplos',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.3',
            'descripcion' => ' Al menos una de las dimensiones del símbolo debe ser mayor al 60% de la altura de la señal',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.4',
            'descripcion' => 'Cuando se requiera elaborar un símbolo para una señal de seguridad e higiene en un caso
        específico que no esté contemplado en los apéndices, se permite el diseño particular que se requiera siempre
        y cuando se establezca la indicación por escrito y su contenido de imagen asociado. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2.5',
            'descripcion' => ' En el caso de las señales de obligación y precaución, podrá utilizarse el símbolo general consistente
        en un signo de admiración como se muestra en las figuras B.1 y C.1 de los apéndices B y C, respectivamente,
        debiendo agregar un texto breve y concreto fuera de los límites de la señal. Este texto deberá cumplir con lo
        establecido en el apartado 8.3.1. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3.1',
            'descripcion' => ' Toda señal de seguridad e higiene podrá complementarse con un texto fuera de sus límites y este
        texto cumplirá con lo siguiente:
        a) Ser un refuerzo a la información que proporciona la señal de seguridad e higiene;
        b) La altura del texto, incluyendo todos sus renglones, no será mayor a la mitad de la altura de la señal
        de seguridad e higiene;
        c) El ancho de texto no será mayor al ancho de la señal de seguridad e higiene;
        d) Estar ubicado abajo de la señal de seguridad e higiene;
        e) Ser breve y concreto, y
        f) Ser en color contrastante sobre el color de seguridad correspondiente a la señal de seguridad e
        higiene que complementa, texto en color negro sobre fondo blanco, o texto en blanco sobre negro. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3.2',
            'descripcion' => ' Unicamente las señales de información se pueden complementar con textos dentro de sus límites,
        debiendo cumplir con lo siguiente:
        a) Ser un refuerzo a la información que proporciona la señal;
        b) No deben dominar sobre los símbolos, para lo cual se limita la altura máxima de las letras a la tercera
        parte de la altura del símbolo;
        c) Deben ser breves y concretos, con un máximo de tres palabras, y
        d) El color del texto será el mismo que el color contrastante correspondiente a la señal de seguridad e
        higiene que complementa. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4',
            'descripcion' => ' Dimensiones de las señales de seguridad e higiene.
        Las dimensiones de las señales de seguridad e higiene deben ser tales que el área superficial y la
        distancia máxima de observación cumplan con la relación siguiente:
        donde: S = superficie de la señal en m2
        L = distancia máxima de observación en m
        Esta relación sólo se aplica para distancias de 5 a 50 m. Para distancias menores a 5 m, el área de las
        señales será como mínimo de 125 cm2
        . Para distancias mayores a 50 m, el área de las señales será, al
        menos, de 12500 cm2
        . ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5',
            'descripcion' => ' Disposición de los colores en las señales de seguridad e higiene. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5.1',
            'descripcion' => 'Para las señales de seguridad e higiene de obligación, precaución e información, el color de
        seguridad debe cubrir cuando menos el 50% de su superficie total. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5.2',
            'descripcion' => ' Para las señales de seguridad e higiene de prohibición el color del fondo debe ser blanco, la banda
        transversal y la banda circular deben ser de color rojo, el símbolo debe colocarse centrado en el fondo y no
        debe obstruir la banda diametral, el color rojo debe cubrir por lo menos el 35% de la superficie total de la señal
        de seguridad e higiene. El color del símbolo debe ser negro. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.5.3',
            'descripcion' => 'En el caso de las señales de seguridad e higiene elaboradas con productos luminiscentes, se
        permitirá usar como color contrastante el amarillo verdoso en lugar del color blanco. Asimismo, el producto
        luminiscente podrá emplearse en los contornos de la señal, del símbolo y de las bandas circular y diametral,
        en las señales de prohibición. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.6',
            'descripcion' => ' Iluminación.
        En condiciones normales, en la superficie de la señal de seguridad e higiene, debe existir una iluminación
        de 50 lx como mínimo. ',
        'tipo' => '8. Señales de seguridad e higiene',
            'frecuencia' => ' ',
            'norm_id' => 13,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-018
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-018-STPS-2000',
            'titulo' => 'Sistema para la identificación y comunicación de peligros
        y riesgos por sustancias químicas peligrosas en los centros de trabajo.',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-018.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Identificar los depósitos, recipientes y áreas que contengan sustancias químicas peligrosas o sus
        residuos, con el señalamiento que se establece en el Capítulo 7. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Comunicar los peligros y riesgos a todos los trabajadores del centro de trabajo y al personal de los
        contratistas que estén expuestos a sustancias químicas peligrosas, de acuerdo al sistema de identificación
        establecido en el Capítulo 7, y mantener un registro de los trabajadores que hayan sido informados. 
        ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Conocer el grado de peligrosidad y los riesgos de las sustancias químicas peligrosas que se utilizan en
        el centro de trabajo, por lo que se debe cumplir con lo siguiente:
        a) contar con las HDS para todas las sustancias químicas peligrosas que se utilicen en el centro de
        trabajo, de acuerdo a lo establecido en el Apéndice C; b) entregar a sus clientes las HDS de las sustancias químicas peligrosas que ellos adquieran, para lo
        cual deben requerir acuse de recibo. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => 'Capacitar y adiestrar en el sistema de identificación y comunicación de peligros y riesgos
        cumpliendo con:
        a) proporcionar por lo menos una vez al año capacitación a todos los trabajadores que manejen
        sustancias químicas peligrosas y cada vez que se emplee una nueva sustancia química peligrosa en
        el centro de trabajo, o se modifique el proceso;
        b) mantener el registro de la última capacitación dada a cada trabajador;
        c) entregar las respectivas constancias de capacitación a los trabajadores que así lo soliciten. ',
            'tipo' => '5. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' Para identificar los peligros y riesgos de las sustancias químicas peligrosas, se debe utilizar a elección
        del patrón, el modelo rectángulo o el modelo rombo y cumplir con la señalización e identificación, conforme a
        lo establecido en el Apéndice A. ',
            'tipo' => '7. Sistema de identificación ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.1',
            'descripcion' => ' Modelo rectángulo: de acuerdo a lo establecido en el Apéndice E. ',
            'tipo' => '7. Sistema de identificación ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1.2',
            'descripcion' => 'Modelo rombo: de acuerdo a lo establecido en el Apéndice F.',
            'tipo' => '7. Sistema de identificación ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'Sistema alternativo: el patrón puede utilizar un sistema alternativo a los modelos rectángulo y rombo,
        que cumpla con el objetivo y finalidad de la presente Norma, previa autorización que otorgue la Secretaría del
        Trabajo y Previsión Social a través de la Dirección General de Seguridad e Higiene en el Trabajo, conforme a
        lo establecido en el artículo 49 de la Ley Federal sobre Metrología y Normalización y 8o. del Reglamento
        Federal de Seguridad, Higiene y Medio Ambiente de Trabajo.',
            'tipo' => '7. Sistema de identificación ',
            'frecuencia' => ' ',
            'norm_id' => 14,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-030
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-030-STPS-2009',
            'titulo' => 'Servicios preventivos de seguridad y salud en el trabajoFunciones y actividades. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-030.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.1',
            'descripcion' => ' Designar a un responsable de seguridad y salud en el trabajo interno o externo, para llevar a cabo las
        funciones y actividades preventivas de seguridad y salud en el centro de trabajo a que se refiere el Capítulo 5. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.2',
            'descripcion' => ' Proporcionar al responsable de seguridad y salud en el trabajo:
        a) El acceso a las diferentes áreas del centro de trabajo para identificar los factores de peligro y la
        exposición de los trabajadores a ellos;
        b) La información relacionada con la seguridad y salud en el trabajo de los procesos, puestos de
        trabajo y actividades desarrolladas por los trabajadores, y
        c) Los medios y facilidades para establecer las medidas de seguridad y salud en el trabajo para la
        prevención de los accidentes y enfermedades laborales. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.3',
            'descripcion' => ' Contar con un diagnóstico integral o por área de trabajo de las condiciones de seguridad y salud del
        centro laboral, de acuerdo con lo que establece el Capítulo 6. El diagnóstico integral comprenderá a las
        diversas áreas, secciones o procesos que conforman al centro de trabajo, en tanto que el relativo al área de
        trabajo, se referirá de manera exclusiva a cada una de ellas. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.4',
            'descripcion' => ' Contar con un programa de seguridad y salud en el trabajo, elaborado con base en el diagnóstico a
        que se refiere el Capítulo 6. El programa deberá actualizarse al menos una vez al año',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.5',
            'descripcion' => 'Comunicar a la comisión de seguridad e higiene y/o a los trabajadores, según aplique, el diagnóstico
        integral o por área de trabajo de las condiciones de seguridad y salud y el contenido del programa de
        seguridad y salud en el trabajo o de la relación de acciones preventivas y correctivas de seguridad y salud en
        el trabajo. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.6',
            'descripcion' => 'Contar con los reportes de seguimiento de los avances en la instauración del programa de seguridad y
        salud en el trabajo o de la relación de acciones preventivas y correctivas de seguridad y salud en el trabajo,
        según aplique. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.7',
            'descripcion' => 'Capacitar al personal de la empresa que forme parte de los servicios preventivos de seguridad y salud
        en el trabajo, en las funciones y actividades que establece la presente Norma. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '4.8',
            'descripcion' => 'Conservar la documentación a que hace referencia la presente Norma al menos por dos años. ',
            'tipo' => '4. Obligaciones del patrón ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.1',
            'descripcion' => ' Elaborar el diagnóstico de seguridad y salud en el trabajo, de acuerdo con lo establecido en el Capítulo
        6.',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => 'Elaborar el programa de seguridad y salud en el trabajo o la relación de acciones preventivas y
        correctivas de seguridad y salud en el trabajo, priorizándolas para su atención, con base en el riesgo
        involucrado. ',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Establecer los mecanismos de respuesta inmediata cuando se detecte un riesgo grave e inminente. ',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => ' Incorporar en el programa de seguridad y salud en el trabajo o en la relación de acciones preventivas y
        correctivas de seguridad y salud en el trabajo, las acciones y programas de promoción para la salud de los
        trabajadores y para la prevención integral de las adicciones que recomienden o dicten las autoridades
        competentes',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => ' Incorporar en el programa de seguridad y salud en el trabajo o en la relación de acciones preventivas y
        correctivas de seguridad y salud en el trabajo, las acciones para la atención de emergencias y contingencias
        sanitarias que recomienden o dicten las autoridades competentes. ',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => 'Establecer los procedimientos, instructivos, guías o registros necesarios para dar cumplimiento al
        programa de seguridad y salud en el trabajo o a la relación de acciones preventivas y correctivas de seguridad
        y salud en el trabajo',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => 'Realizar el seguimiento de los avances en la instauración del programa de seguridad y salud en el
        trabajo o de la relación de acciones preventivas y correctivas de seguridad y salud en el trabajo y reportar por
        escrito los resultados al patrón, al menos una vez al año.',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Registrar los resultados del seguimiento del programa de seguridad y salud en el trabajo o de la
        relación de acciones preventivas y correctivas de seguridad y salud en el trabajo. ',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => 'Verificar que, con la instauración del programa de seguridad y salud en el trabajo o de la relación de
        acciones preventivas y correctivas de seguridad y salud en el trabajo, se cumpla con el objeto de su aplicación
        y, en su caso, realizar las adecuaciones que se requieran tanto al diagnóstico como al programa o a la
        relación. ',
            'tipo' => '5. Funciones y actividades del responsable de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '6.1',
            'descripcion' => 'El diagnóstico integral o por área de trabajo sobre las condiciones de seguridad y salud en el centro
        laboral, deberá considerar al menos la identificación de lo siguiente:
        a) Las condiciones físicas peligrosas o inseguras que puedan representar un riesgo en las
        instalaciones, procesos, maquinaria, equipo, herramientas, medios de transporte, materiales y
        energía;
        b) Los agentes físicos, químicos y biológicos capaces de modificar las condiciones del medio ambiente
        del centro de trabajo que, por sus propiedades, concentración, nivel y tiempo de exposición o acción,
        pueden alterar la salud de los trabajadores, así como las fuentes que los generan;
        c) Los peligros circundantes al centro de trabajo que lo puedan afectar, cuando sea posible, y
        d) Los requerimientos normativos en materia de seguridad y salud en el trabajo que resulten aplicables. ',
            'tipo' => '6. Diagnóstico de seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' El programa de seguridad y salud en el trabajo, deberá contener al menos:
        a) La acción preventiva o correctiva por instrumentar por cada aspecto identificado;
        b) Las acciones y programas de promoción para la salud de los trabajadores y para la prevención
        integral de las adicciones que recomienden o dicten las autoridades competentes;
        c) Las acciones para la atención de emergencias y contingencias sanitarias que recomienden o dicten
        las autoridades competentes;
        d) Las fechas de inicio y término programadas para instrumentar las acciones preventivas o correctivas
        y para la atención de emergencias, y
        e) El responsable de la ejecución de cada acción preventiva o correctiva y para la atención de
        emergencias. ',
            'tipo' => '7. Programa de seguridad y salud en el trabajo o relación de acciones preventivas y correctivas de
        seguridad y salud en el trabajo ',
            'frecuencia' => ' ',
            'norm_id' => 15,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);

        /**
         * NOM-019
         */
        DB::table('norms')->insert([
            'codigo' => 'NOM-019-STPS-2011',
            'titulo' => 'Constitución, integración, organización y funcionamiento de las
        comisiones de seguridad e higiene. ',
            'direccion' => 'http://asinom.stps.gob.mx:8145/upload/noms/Nom-019.pdf',
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.2',
            'descripcion' => ' Designar a sus representantes para participar en la comisión que se integre en el centro de trabajo.
        Dicha designación deberá realizarse con base en las funciones por desempeñar. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.3',
            'descripcion' => 'Solicitar al sindicato o a los trabajadores, si no hubiera sindicato, la designación de sus representantes
        para participar en la comisión. Dicha designación deberá realizarse con base en las funciones por
        desempeñar. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.4',
            'descripcion' => 'Contar con el acta de constitución de la comisión del centro de trabajo, y de sus actualizaciones,
        cuando se modifique su integración, de conformidad con lo previsto en el numeral 7.4 de esta Norma. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.5',
            'descripcion' => ' Contar con el programa anual de los recorridos de verificación de la comisión, de conformidad con lo
        previsto en los numerales 9.3 a 9.5 de la presente Norma. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.6',
            'descripcion' => ' Contar con las actas de los recorridos de verificación realizados por la comisión, de conformidad con lo
        establecido en el numeral 9.12 de esta Norma. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.7',
            'descripcion' => ' Facilitar a los trabajadores el desempeño de sus funciones como integrantes de la comisión. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.8',
            'descripcion' => 'Proporcionar a la comisión el diagnóstico sobre seguridad y salud en el trabajo, a que se refiere la
        NOM-030-STPS-2009, o las que la sustituyan. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.9',
            'descripcion' => ' Apoyar la investigación de los accidentes y enfermedades de trabajo que lleve a cabo la comisión,
        proporcionando para tal efecto información sobre:
        a) Los incidentes, accidentes y enfermedades de trabajo que ocurran en el centro de trabajo;
        b) Los procesos de trabajo y las hojas de datos de seguridad de las sustancias químicas utilizadas, y
        c) El seguimiento a las causas de los riesgos de trabajo que tengan lugar en el centro laboral. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.10',
            'descripcion' => 'Brindar facilidades a los integrantes de la comisión para que utilicen los apoyos informáticos
        desarrollados por la Secretaría, a que se refieren los numerales 9.7 y 9.8 de la presente Norma. 
        ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.11',
            'descripcion' => ' Atender y dar seguimiento a las medidas propuestas por la comisión para prevenir los riesgos de
        trabajo, de acuerdo con los resultados de las actas de los recorridos de verificación y con base en lo dispuesto
        por el Reglamento y las normas que resulten aplicables, de conformidad con lo dispuesto en el numeral 9.11
        de esta Norma.',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '5.12',
            'descripcion' => ' Difundir entre los trabajadores del centro de trabajo, por cualquier medio:
        a) La relación actualizada de los integrantes de la comisión, precisando el puesto, turno y área de
        trabajo de cada uno de ellos;
        b) Los resultados de las investigaciones, con las causas y consecuencias, sobre los accidentes y
        enfermedades de trabajo, y
        c) Las medidas propuestas por la comisión, relacionadas con la prevención de riesgos de trabajo, a fin
        de evitar su recurrencia. ',
        'tipo' => '5. Obligaciones del patrón',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.1',
            'descripcion' => ' Cada comisión deberá estar integrada por:
        a) Un trabajador y el patrón o su representante, cuando el centro de trabajo cuente con menos de 15
        trabajadores, o
        b) Un coordinador, un secretario y los vocales que acuerden el patrón o sus representantes, y el
        sindicato o el representante de los trabajadores, en el caso de que no exista la figura sindical, cuando
        el centro de trabajo cuente con 15 trabajadores o más. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.2',
            'descripcion' => 'La representación de los trabajadores deberá estar conformada por aquéllos que desempeñen sus
        labores directamente en el centro de trabajo y que, preferentemente, tengan conocimientos o experiencia en
        materia de seguridad y salud en el trabajo. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.3',
            'descripcion' => 'El patrón deberá formalizar la constitución de cada comisión, a través de un acta, en sesión con los
        miembros que se hayan seleccionado y con la representación del sindicato, si lo hubiera. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.4',
            'descripcion' => ' El acta de constitución de la comisión deberá contener como mínimo los datos siguientes:
        a) Datos del centro de trabajo:
        1) El nombre, denominación o razón social;
        2) El domicilio completo (calle, número, colonia, municipio o delegación, ciudad, entidad
        federativa, código postal);
        3) El Registro Federal de Contribuyentes;
        4) El Registro Patronal otorgado por el Instituto Mexicano del Seguro Social;
        5) La rama industrial o actividad económica;
        6) La fecha de inicio de actividades;
        7) El número de trabajadores del centro de trabajo, y
        8) El número de turnos, y
        b) Datos de la comisión:
        1) La fecha de integración de la comisión (día, mes y año), y
        2) El nombre y firma del patrón o de su representante, y del representante de los trabajadores,
        tratándose de centros de trabajo con menos de 15 trabajadores, o
        3) El nombre y firma del coordinador, secretario y vocales, en el caso de centros de trabajo con 15
        trabajadores o más. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.5',
            'descripcion' => 'Los centros de trabajo podrán constituir otras comisiones de seguridad e higiene, tomando en
        consideración lo siguiente:
        a) El número de turnos del centro de trabajo;
        b) El número de trabajadores que integran cada turno de trabajo;
        c) Los agentes y condiciones peligrosas de las áreas que integran al centro de trabajo, y
        d) Las empresas contratistas que desarrollen labores relacionadas con la actividad principal del centro
        de trabajo dentro de las instalaciones de este último. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '7.6',
            'descripcion' => 'Las empresas podrán organizar otras comisiones para consolidar las acciones desarrolladas por las
        comisiones de seguridad e higiene pertenecientes al mismo o a distintos centros de trabajo, con base en la
        circunscripción territorial, la actividad económica, el grado de riesgo y el número de trabajadores. ',
        'tipo' => '7. Constitución e integración de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.1',
            'descripcion' => 'Los integrantes de la comisión tendrán a su cargo las funciones contenidas en el presente Capítulo. ',
        'tipo' => '8. Organización de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.2',
            'descripcion' => 'El coordinador tendrá las funciones siguientes:
        a) Presidir las reuniones de trabajo de la comisión;
        b) Dirigir y coordinar el funcionamiento de la comisión;
        c) Promover la participación de los integrantes de la comisión y constatar que cada uno de ellos cumpla
        con las tareas asignadas;
        d) Integrar el programa anual de los recorridos de verificación de la comisión y presentarlo al patrón; e) Consignar en las actas de los recorridos de verificación de la comisión:
        1) Los agentes, condiciones peligrosas o inseguras y actos inseguros identificados;
        2) Los resultados de las investigaciones sobre las causas de los accidentes y enfermedades de
        trabajo, y
        3) Las medidas para prevenirlos, con base en lo dispuesto por el Reglamento y las normas que
        resulten aplicables;
        f) Coordinar las investigaciones sobre las causas de los accidentes y enfermedades de trabajo;
        g) Elaborar al término de cada recorrido de verificación, conjuntamente con el secretario de la comisión,
        el acta correspondiente;
        h) Entregar al patrón las actas de los recorridos de verificación y analizar conjuntamente con él las
        medidas propuestas para prevenir los accidentes y enfermedades de trabajo;
        i) Dar seguimiento a la instauración de las medidas propuestas por la comisión relacionadas con la
        prevención de riesgos de trabajo;
        j) Asesorar a los vocales de la comisión y al personal del centro de trabajo, en la identificación de
        agentes, condiciones peligrosas o inseguras y actos inseguros en el medio ambiente laboral;
        k) Participar en las inspecciones sobre las condiciones generales de seguridad e higiene que practique
        la autoridad laboral en el centro de trabajo, en su caso;
        l) Solicitar, previo acuerdo de la comisión, la sustitución de sus integrantes, y
        m) Proponer al patrón el programa anual de capacitación de los integrantes de la comisión. ',
        'tipo' => '8. Organización de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.3',
            'descripcion' => 'El secretario tendrá las funciones siguientes:
        a) Convocar a los integrantes de la comisión a las reuniones de trabajo de ésta;
        b) Organizar y apoyar, de común acuerdo con el coordinador, el desarrollo de las reuniones de trabajo
        de la comisión;
        c) Convocar a los integrantes de la comisión para realizar los recorridos de verificación programados;
        d) Integrar a las actas de recorridos de verificación de la comisión:
        1) Los agentes, condiciones peligrosas o inseguras y actos inseguros identificados;
        2) Los resultados de las investigaciones sobre las causas de los accidentes y enfermedades de
        trabajo, y
        3) Las medidas para prevenirlos, con base en lo dispuesto por el Reglamento y las normas que
        resulten aplicables;
        e) Apoyar la realización de investigaciones sobre las causas de los accidentes y enfermedades de
        trabajo;
        f) Elaborar al término de cada recorrido de verificación, conjuntamente con el coordinador de la
        comisión, el acta correspondiente;
        g) Recabar las firmas de los integrantes de la comisión en las actas de los recorridos de verificación;
        h) Presentar y entregar las actas de recorridos de verificación al patrón, conjuntamente con el
        coordinador de la comisión;
        i) Mantener bajo custodia copia de:
        1) Las actas de constitución y su actualización;
        2) Las actas de los recorridos de verificación que correspondan al programa anual de recorridos
        de verificación del ejercicio en curso y del año inmediato anterior;
        3) La evidencia documental sobre la capacitación impartida el ejercicio en curso y el año inmediato
        anterior a los integrantes de la propia comisión, y
        4) La documentación que se relacione con la comisión;
        j) Participar en las inspecciones sobre las condiciones generales de seguridad e higiene que practique
        la autoridad laboral en el centro de trabajo, en su caso, y
        k) Integrar el programa anual de capacitación de los integrantes de la comisión',
        'tipo' => '8. Organización de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '8.4',
            'descripcion' => ' Los vocales tendrán las funciones siguientes:a) Participar en las reuniones de trabajo de la comisión;
        b) Participar en los recorridos de verificación;
        c) Detectar y recabar información sobre los agentes, condiciones peligrosas o inseguras y actos
        inseguros identificados en sus áreas de trabajo;
        d) Colaborar en la realización de investigaciones sobre las causas de los accidentes y enfermedades de
        trabajo;
        e) Revisar las actas de los recorridos de verificación;
        f) Participar en el seguimiento a la instauración de las medidas propuestas por la comisión relacionadas
        con la prevención de riesgos de trabajo;
        g) Apoyar las actividades de asesoramiento a los trabajadores para la identificación de agentes,
        condiciones peligrosas o inseguras y actos inseguros en su área de trabajo;
        h) Identificar temas de seguridad y salud en el trabajo para su incorporación en el programa anual de
        capacitación de los integrantes de la comisión, e
        i) Participar en las inspecciones sobre las condiciones generales de seguridad e higiene que practique
        la autoridad laboral en el centro de trabajo, en su caso.  ',
        'tipo' => '8. Organización de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.1',
            'descripcion' => ' Cuando se constituya la comisión, el cargo de coordinador recaerá en el representante que designe el
        patrón, y el de secretario en el de los trabajadores que sea designado por el sindicato. De no existir la figura
        sindical, la selección del representante de los trabajadores se hará entre y por los integrantes de esta
        representación. Los demás miembros de la comisión serán nombrados vocales.
        Los nombramientos de coordinador, secretario y vocales tendrán una vigencia de dos años, y los de
        coordinador y secretario se alternarán entre los representantes del patrón y de los trabajadores. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.2',
            'descripcion' => ' En caso de ausencia temporal del coordinador o del secretario de la comisión, su cargo será ocupado
        por uno de los vocales, de la representación que corresponda.',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.3',
            'descripcion' => ' El programa anual de recorridos de verificación deberá integrase dentro de los treinta días naturales
        siguientes a la constitución de la comisión. Posteriormente, se deberá conformar el programa dentro de los
        primeros treinta días naturales de cada año. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.4',
            'descripcion' => ' En el programa anual se determinarán las prioridades de los recorridos de verificación, con base en las
        áreas con mayor presencia de agentes y condiciones peligrosas o inseguras, y a partir de los incidentes,
        accidentes y enfermedades de trabajo. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.5',
            'descripcion' => 'Los recorridos de verificación previstos en el programa anual de la comisión, se deberán realizar al
        menos con una periodicidad trimestral, a efecto de:
        a) Identificar los agentes, condiciones peligrosas o inseguras y actos inseguros en el centro de trabajo;
        b) Investigar las causas de los accidentes y enfermedades de trabajo que en su caso ocurran, de
        acuerdo con los elementos que les proporcione el patrón y otros que estimen necesarios (Véase
        Guía de Referencia I Investigación de las causas de los accidentes y enfermedades de trabajo);
        c) Determinar las medidas para prevenir riesgos de trabajo, con base en lo dispuesto por el Reglamento
        y las normas que resulten aplicables, y
        d) Dar seguimiento a la instauración de las medidas propuestas por la comisión para prevenir los
        riesgos de trabajo. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.6',
            'descripcion' => ' Para la identificación de agentes, condiciones peligrosas o inseguras y actos inseguros en el centro de
        trabajo, la comisión podrá hacer uso del diagnóstico sobre seguridad y salud en el trabajo realizado por los
        servicios preventivos de seguridad y salud en el trabajo, a que se refiere la NOM-030-STPS-2009, o las que la
        sustituyan. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.7',
            'descripcion' => ' Para la identificación y determinación de las disposiciones normativas en materia de seguridad y salud
        aplicables al centro de trabajo, la comisión podrá utilizar el Asistente para la Identificación de las Normas
        Oficiales Mexicanas de Seguridad y Salud en el Trabajo y el módulo para la Evaluación del Cumplimiento de
        la Normatividad en Seguridad y Salud en el Trabajo, contenidos en la página electrónica de la Secretaría
        http://autogestion.stps.gob.mx:8162/, con la finalidad de detectar agentes, condiciones peligrosas o inseguras
        y actos inseguros en el centro de trabajo. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.8',
            'descripcion' => 'Para la determinación de las medidas por adoptar para prevenir riesgos de trabajo en el centro de
        trabajo y el seguimiento a su instauración, la comisión podrá utilizar el módulo para la Elaboración de
        Programas de Seguridad y Salud en el Trabajo, contenido en la página electrónica de la Secretaría
        http://autogestion.stps.gob.mx:8162/.',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.9',
            'descripcion' => ' La comisión deberá efectuar verificaciones extraordinarias en caso de que:
        a) Ocurran accidentes o enfermedades de trabajo que generen defunciones o incapacidades
        permanentes;
        b) Existan modificaciones significativas en las instalaciones y/o cambios en los procesos de trabajo, con
        base en la información proporcionada por el patrón o a solicitud de los trabajadores, o
        c) Reporten los trabajadores la presencia de agentes y condiciones peligrosas o inseguras que, a juicio
        de la propia comisión, así lo ameriten.
        Las verificaciones extraordinarias deberán realizarse dentro de los treinta días naturales siguientes a que
        se presente cualquiera de los supuestos previstos en este numeral. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.10',
            'descripcion' => ' La comisión deberá orientar a los trabajadores durante los recorridos de verificación sobre las
        medidas de seguridad por observar en las áreas del centro de trabajo. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.11',
            'descripcion' => ' El seguimiento de las medidas propuestas por la comisión relacionadas con la prevención de riesgos
        de trabajo, deberá efectuarse al menos en forma trimestral. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.12',
            'descripcion' => ' Las actas de los recorridos de verificación deberán contener la información siguiente:
        a) El nombre, denominación o razón social del centro de trabajo;
        b) El domicilio completo (calle, número, colonia, municipio o delegación, ciudad, entidad federativa,
        código postal);
        c) El número de trabajadores del centro de trabajo;
        d) El tipo de recorrido de verificación: ordinario (conforme al programa anual) o extraordinario;
        e) Las fechas y horas de inicio y término del recorrido de verificación;
        f) El área o áreas del centro de trabajo en las que se realizó el recorrido de verificación;
        g) Los agentes, condiciones peligrosas o inseguras y actos inseguros identificados durante el recorrido
        de verificación;
        h) Las causas que, en su caso, se hayan identificado sobre los accidentes y enfermedades de trabajo
        que ocurran;
        i) Las medidas para prevenir los riesgos de trabajo detectados, con base en lo dispuesto por el
        Reglamento y las normas que resulten aplicables;
        j) Las recomendaciones que por consenso se determinen en el seno de la comisión para prevenir,
        reducir o eliminar condiciones peligrosas o inseguras, así como la prioridad con la que deberán
        atenderse;
        k) El seguimiento a las recomendaciones formuladas en los recorridos de verificación anteriores;
        l) El lugar y fecha de conclusión del acta, y
        m) El nombre y firma de los integrantes de la comisión que participaron en el recorrido de verificación. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '9.13',
            'descripcion' => ' Los integrantes de la comisión podrán ser sustituidos a petición de quien los propuso, o bien por los
        motivos siguientes:
        a) En caso de que no cumplan con las actividades establecidas por la propia comisión;
        b) Si no asisten a más de dos de las verificaciones consecutivas programadas en forma injustificada, o
        c) Por ausencia definitiva en el centro de trabajo. ',
        'tipo' => '9. Funcionamiento de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.1',
            'descripcion' => ' Los centros de trabajo deberán disponer de un programa anual de capacitación para los integrantes
        de la comisión, que considere al menos lo siguiente:
        a) Los integrantes de la comisión involucrados en la capacitación;
        b) Los temas de la capacitación de acuerdo con el numeral 10.2 de la presente Norma;
        c) Los tiempos de duración de los cursos y su período de ejecución, y
        d) El nombre del responsable del programa. ',
        'tipo' => '10. Capacitación de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.2',
            'descripcion' => 'El programa anual de capacitación de los integrantes de la comisión, deberá comprender al menos
        los temas siguientes:
        a) Las obligaciones del patrón y de los trabajadores respecto del funcionamiento de la comisión;
        b) La forma cómo debe constituirse e integrarse la comisión;
        c) Las responsabilidades del coordinador, del secretario y de los vocales de la comisión;
        d) Las funciones que tiene encomendadas la comisión;
        e) Los temas en materia de seguridad y salud en el trabajo aplicables al centro de trabajo;
        f) Las medidas de seguridad y salud que se deben observar en el centro de trabajo, con base en lo
        dispuesto por el Reglamento y las normas que resulten aplicables;
        g) La metodología para la identificación de condiciones peligrosas o inseguras y actos inseguros en el
        centro de trabajo, y
        h) El procedimiento para la investigación sobre las causas de los accidentes y enfermedades de trabajo
        que ocurran.',
        'tipo' => '10. Capacitación de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
        DB::table('requirements')->insert([
            'numero' => '10.3',
            'descripcion' => ' Cuando se incorpore a un nuevo integrante o integrantes a la comisión, se deberá proporcionar de
        inmediato un curso de inducción, al menos sobre los aspectos considerados en el numeral 10.2, incisos del a)
        al d), de esta Norma. ',
        'tipo' => '10. Capacitación de las comisiones',
            'frecuencia' => ' ',
            'norm_id' => 16,
            'created_at' => '2017-01-01',
            'updated_at' => '2017-01-01'
        ]);
    }
}
