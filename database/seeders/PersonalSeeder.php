<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personal;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personal::create(['apenombres' => 'Ing. Wilder Dimarco Chavez Celmi', 'cargo' => 'DIRECTOR REGIONAL DE AGRICULTURA', 'oficina_id' => '1']);
        Personal::create(['apenombres' => 'Ing. Edith Roberta Chuco Gutiérrez', 'cargo' => 'DIRECTOR REGIONAL DE TRANSPORTES Y COMUNICACIONES', 'oficina_id' => '2']);
        Personal::create(['apenombres' => 'Ing. Juan Andrés Bustamante Encinas', 'cargo' => 'GERENTE SUB REGIONAL EL PACIFICO', 'oficina_id' => '3']);
        Personal::create(['apenombres' => 'Ing. Jeff Eduardo Cardenas Concha', 'cargo' => 'GERENTE GENERAL DEL PROYECTO ESPECIAL CHINECAS', 'oficina_id' => '4']);
        Personal::create(['apenombres' => 'Abog. Jose Antonio Jara Paredes', 'cargo' => 'GERENTE GENERAL DEL TERMINAL PORTUARIO DE CHIMBOTE', 'oficina_id' => '5']);
        Personal::create(['apenombres' => 'Ing. Cesar Terrones Quezada', 'cargo' => 'GERENTE GENERAL AUTORIDAD PORTUARIA REGIONAL', 'oficina_id' => '6']);
        Personal::create(['apenombres' => 'Dr. Nancy Eloísa Dolores Anaya', 'cargo' => 'DIRECTOR REGIONAL DE EDUCACIÓN', 'oficina_id' => '7']);
        Personal::create(['apenombres' => 'M.C Erick de la Torre Bejarano', 'cargo' => 'DIRECTOR REGIONAL DE SALUD', 'oficina_id' => '8']);
        Personal::create(['apenombres' => 'Sr (a). Eliseo Santiago Alvarado Cauchi', 'cargo' => 'DIRECTOR DE LA UGEL - AIJA', 'oficina_id' => '9']);
        Personal::create(['apenombres' => 'Sr (a). Roger Percy Muñoz Guerrero', 'cargo' => 'DIRECTOR DE LA UGEL - ANTONIO RAIMONDI', 'oficina_id' => '10']);
        Personal::create(['apenombres' => 'Sr (a). Prospero Manuel Roca Falcon', 'cargo' => 'DIRECTOR DE LA UGEL - ASUNCIÓN', 'oficina_id' => '11']);
        Personal::create(['apenombres' => 'Sr (a). Vicente Ramon Rodriguez Espejo', 'cargo' => 'DIRECTOR DE LA UGEL - BOLOGNESI', 'oficina_id' => '12']);
        Personal::create(['apenombres' => 'Sr (a). Dorca Francisca Rondan Palacios', 'cargo' => 'DIRECTOR DE LA UGEL - CARLOS F. FITZCARRALD', 'oficina_id' => '13']);
        Personal::create(['apenombres' => 'Sr (a). Julio Martin Armas Colonia', 'cargo' => 'DIRECTOR DEL PROGRAMA SECTORIAL III UGEL - CARHUAZ', 'oficina_id' => '14']);
        Personal::create(['apenombres' => 'Sr (a). Héctor José Salazar Cordova', 'cargo' => 'DIRECTOR DEL PROGRAMA SECTORIAL II UGEL CARHUAZ', 'oficina_id' => '15']);
        Personal::create(['apenombres' => 'Mg. Edgar Augusto Mejia Vega', 'cargo' => 'DIRECTOR DEL SISTEMA ADMINISTRATIVO II - ÁREA DE GESTIÓN INSTITUCIONAL', 'oficina_id' => '16']);
        Personal::create(['apenombres' => 'C.P.C. Cecilia Gladys Garcia Paz', 'cargo' => 'DIRECTOR DEL SISTEMA ADMINISTRATIVO II - ÁREA DE GESTIÓN ADMINISTRATIVA', 'oficina_id' => '17']);
        Personal::create(['apenombres' => 'Sr (a). Rosa Olivia Zegarra Yui', 'cargo' => 'DIRECTOR DE LA UGEL - CASMA', 'oficina_id' => '18']);
        Personal::create(['apenombres' => 'Sr (a). Wilbert David Gutierres Escarate', 'cargo' => 'DIRECTOR DE LA UGEL - CORONGO (e)', 'oficina_id' => '19']);
        Personal::create(['apenombres' => 'Sr (a). Daniel Angel Almeyda Medina', 'cargo' => 'DIRECTOR DE LA UGEL - HUARAZ', 'oficina_id' => '20']);
        Personal::create(['apenombres' => 'Sr (a). Cesar Bravo Hinostroza', 'cargo' => 'DIRECTOR DE LA UGEL - HUARI', 'oficina_id' => '21']);
        Personal::create(['apenombres' => 'Sr (a). Ezmila Mirtha Vidal Quito', 'cargo' => 'DIRECTOR DE LA UGEL - HUARMEY', 'oficina_id' => '22']);
        Personal::create(['apenombres' => 'Sr (a). María Soledad Borja Cruzado', 'cargo' => 'DIRECTOR DE LA UGEL - HUAYLAS', 'oficina_id' => '23']);
        Personal::create(['apenombres' => 'Sr (a). Maria Margot Escudero Tanga', 'cargo' => 'DIRECTOR DE LA UGEL - MARISCAL LUZURIAGA', 'oficina_id' => '24']);
        Personal::create(['apenombres' => 'Sr (a). Oscar Juan Huatuco Mariño', 'cargo' => 'DIRECTOR DE LA UGEL - OCROS', 'oficina_id' => '25']);
        Personal::create(['apenombres' => 'Sr (a). Estuardo Diaz Robles', 'cargo' => 'DIRECTOR DE LA UGEL - PALLASCA', 'oficina_id' => '26']);
        Personal::create(['apenombres' => 'Sr (a). David Arsenio Inga Barzola', 'cargo' => 'DIRECTOR DE LA UGEL - POMABAMBA (e)', 'oficina_id' => '27']);
        Personal::create(['apenombres' => 'Sr (a). Angela Cristilda Sarmiento Pereda', 'cargo' => 'DIRECTOR DE LA UGEL - RECUAY', 'oficina_id' => '28']);
        Personal::create(['apenombres' => 'Sr (a). Romy Carmen Luisa Saldaña Tavara', 'cargo' => 'DIRECTOR DE LA UGEL - SANTA', 'oficina_id' => '29']);
        Personal::create(['apenombres' => 'Sr (a). Nicolas Osler Zambrano Valdiviezo', 'cargo' => 'DIRECTOR DE LA UGEL - SIHUAS', 'oficina_id' => '30']);
        Personal::create(['apenombres' => 'Sr (a). Vicente Carlos Cochachin Henostroza', 'cargo' => 'DIRECTOR DE LA UGEL - YUNGAY', 'oficina_id' => '31']);
        Personal::create(['apenombres' => 'M.C Maritza Roxana Benites Villaorduña', 'cargo' => 'DIRECTOR EJECUTIVO DEL HOSPITAL "VICTOR RAMOS GUARDIA"', 'oficina_id' => '32']);
        Personal::create(['apenombres' => 'M.C Roger Mario Pereda Flores', 'cargo' => 'DIRECTOR EJECUTIVO DEL HOSPITAL "ELEAZAR GUZMAN BARRON"', 'oficina_id' => '33']);
        Personal::create(['apenombres' => 'M.C Richard Pedro Mendoza Orellana', 'cargo' => 'DIRECTOR DE LA UNIDAD EJECUTORA 404 SALUD "LA CALETA" DE CHIMBOTE', 'oficina_id' => '34']);
        Personal::create(['apenombres' => 'Med. Noymi Edelina Soto Espinoza', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD HUAYLAS SUR', 'oficina_id' => '35']);
        Personal::create(['apenombres' => 'M.C Yuri Miguel Carranza Calvo', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD HUAYLAS NORTE', 'oficina_id' => '36']);
        Personal::create(['apenombres' => '. - - -', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD CONCHUCOS SUR', 'oficina_id' => '37']);
        Personal::create(['apenombres' => 'M.C Juan Santos Espinoza Benito', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD CONCHUCOS NORTE', 'oficina_id' => '38']);
        Personal::create(['apenombres' => 'M.C César Augusto Saavedra Figueredo', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD PACIFICO NORTE', 'oficina_id' => '39']);
        Personal::create(['apenombres' => 'M.C Roberto Dustín Álvarez Yufra', 'cargo' => 'DIRECTOR EJECUTIVO DE LA RED DE SALUD PACIFICO SUR', 'oficina_id' => '40']);
        Personal::create(['apenombres' => 'C.P.C. Fabian Koki Noriega Brito', 'cargo' => 'GOBERNADOR REGIONAL', 'oficina_id' => '41']);
        Personal::create(['apenombres' => 'Lic. Angelly Milagritos Epifanía Chávez', 'cargo' => 'VICE GOBERNADOR REGIONAL', 'oficina_id' => '42']);
        Personal::create(['apenombres' => 'Mg. Walter Hugo Sandoval Baltazar', 'cargo' => 'GERENTE GENERAL REGIONAL', 'oficina_id' => '43']);
        Personal::create(['apenombres' => 'Ing. Daniel Enrique Rios Padilla', 'cargo' => 'JEFE DEL ORGANO DE CONTROL INSTITUCIONAL', 'oficina_id' => '44']);
        Personal::create(['apenombres' => 'Abog. Leovardo Billi Lavado Rosales', 'cargo' => 'PROCURADOR PÚBLICO REGIONAL', 'oficina_id' => '45']);
        Personal::create(['apenombres' => 'Abog. Benjamín Yauri Sánchez', 'cargo' => 'SECRETARIO TECNICO DEL CONSEJO REGIONAL', 'oficina_id' => '46']);
        Personal::create(['apenombres' => 'Abog. Fredy Russmelt Alvaro Tarazona', 'cargo' => 'SECRETARIO GENERAL', 'oficina_id' => '47']);
        Personal::create(['apenombres' => 'Lic. Esperanza Estela Loli Espinoza', 'cargo' => 'JEFE DE LA OFICINA DE IMAGEN INSTITUCIONAL (E)', 'oficina_id' => '48']);
        Personal::create(['apenombres' => 'Ing. Benjamin Marcelino Padilla Rivera', 'cargo' => 'JEFE DE LA OFICINA REGIONAL DE DEFENSA NACIONAL', 'oficina_id' => '49']);
        Personal::create(['apenombres' => '. Oscar Garcia Rimac', 'cargo' => 'COORDINADOR DEL CENTRO DE OPERACIONES DE EMERGENCIA REGIONAL - COER ANCASH (E)', 'oficina_id' => '50']);
        Personal::create(['apenombres' => 'Mg. Wilman Jorge Heredia Escobar', 'cargo' => 'GERENTE REGIONAL DE ADMINISTRACIÓN', 'oficina_id' => '51']);
        Personal::create(['apenombres' => 'Mg. Rocío Magreth Castillo Pineda', 'cargo' => 'SUBGERENTE DE ADMINISTRACIÓN FINANCIERA', 'oficina_id' => '52']);
        Personal::create(['apenombres' => 'C.P.C. Ana Edith Huanachin Huayascachi', 'cargo' => 'SUBGERENTE DE ABASTECIMIENTO Y SERVICIOS GENERALES', 'oficina_id' => '53']);
        Personal::create(['apenombres' => 'Ing. Juan Carlos Tipismana Marreros', 'cargo' => 'SUBGERENCIA DE TECNOLOGIAS DE LA INFORMACIÓN E INNOVACIÓN', 'oficina_id' => '54']);
        Personal::create(['apenombres' => 'Lic. Rudy Raul Robles Chaves', 'cargo' => 'SUBGERENTE DE RECURSOS HUMANOS', 'oficina_id' => '55']);
        Personal::create(['apenombres' => 'Abog. Jesús Edmundo Henostroza Suarez', 'cargo' => 'GERENTE REGIONAL DE ASESORÍA JURÍDICA', 'oficina_id' => '56']);
        Personal::create(['apenombres' => 'Econ. Clara Miluska Zavaleta Lazo', 'cargo' => 'GERENTE REGIONAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDICIONAMIENTO TERRITORIAL', 'oficina_id' => '57']);
        Personal::create(['apenombres' => 'Lic. Joel Balvino Lázaro Evaristo', 'cargo' => 'SUBGERENTE DE PLANEAMIENTO Y ACONDICIONAMIENTO TERRITORIAL', 'oficina_id' => '58']);
        Personal::create(['apenombres' => 'C.P.C. María Massiel Chávez Chávez', 'cargo' => 'SUBGERENTE DE PRESUPUESTO', 'oficina_id' => '59']);
        Personal::create(['apenombres' => 'Ing. Miguel Ángel Izaguirre Minaya', 'cargo' => 'SUBGERENTE DE PROMOCIÓN Y PROGRAMACIÓN MULTIANUAL DE INVERSIONES', 'oficina_id' => '60']);
        Personal::create(['apenombres' => '. - - -', 'cargo' => 'SUBGERENTE DE MODERNIZACIÓN Y DESARROLLO INSTITUCIONAL', 'oficina_id' => '61']);
        Personal::create(['apenombres' => 'Ing. José Clemente Mendoza Suyo', 'cargo' => 'GERENTE REGIONAL DE DESARROLLO ECONOMICO', 'oficina_id' => '62']);
        Personal::create(['apenombres' => 'Abog. Henry Emilio Diaz Rodriguez', 'cargo' => 'DIRECTOR REGIONAL DE PRODUCCIÓN', 'oficina_id' => '63']);
        Personal::create(['apenombres' => 'Ing. Ricardo Cayo Castillejo Melgarejo', 'cargo' => 'DIRECTOR REGIONAL DE ENERGIA Y MINAS', 'oficina_id' => '64']);
        Personal::create(['apenombres' => 'Lic. Liz Xiomara Durán León', 'cargo' => 'DIRECTOR REGIONAL DE COMERCIO EXTERIOR Y TURISMO', 'oficina_id' => '65']);
        Personal::create(['apenombres' => 'Ing. Wilder Dimarco Chavez Celmi', 'cargo' => 'DIRECTOR REGIONAL DE AGRICULTURA', 'oficina_id' => '66']);
        Personal::create(['apenombres' => 'C.D. Hernan Luis Villacaqui Rojas', 'cargo' => 'GERENTE REGIONAL DE DESARROLLO SOCIAL', 'oficina_id' => '67']);
        Personal::create(['apenombres' => 'Arq. Giuliana Rocio Ayala Zavaleta', 'cargo' => 'DIRECTORA REGIONAL DE VIVIENDA, CONSTRUCCIÓN Y SANEAMIENTO', 'oficina_id' => '68']);
        Personal::create(['apenombres' => 'M.C Erick de la Torre Bejarano', 'cargo' => 'DIRECTOR REGIONAL DE SALUD', 'oficina_id' => '69']);
        Personal::create(['apenombres' => 'Dr. Nancy Eloísa Dolores Anaya', 'cargo' => 'DIRECTOR REGIONAL DE EDUCACIÓN', 'oficina_id' => '70']);
        Personal::create(['apenombres' => 'Dr. Pablo Alfonso Maguiña Minaya', 'cargo' => 'DIRECTOR DEL ARCHIVO REGIONAL DE ANCASH (E)', 'oficina_id' => '71']);
        Personal::create(['apenombres' => 'Abog. Rubén Alfredo Acero de la Cruz', 'cargo' => 'DIRECTOR REGIONAL DE TRABAJO Y PROMOCIÓN DEL EMPLEO', 'oficina_id' => '72']);
        Personal::create(['apenombres' => 'Mg. José Luis Pantigoso Ortecho', 'cargo' => 'GERENTE REGIONAL DE INFRAESTRUCTURA', 'oficina_id' => '73']);
        Personal::create(['apenombres' => 'Ing. Ana Melva Salas Laureano', 'cargo' => 'SUBGERENTE DE ESTUDIOS DE INVERSIONES', 'oficina_id' => '74']);
        Personal::create(['apenombres' => 'Ing. Edgard esteban Mejía Duclos', 'cargo' => 'SUBGERENTE DE SUPERVISIÓN Y LIQUIDACIÓN DE OBRAS', 'oficina_id' => '75']);
        Personal::create(['apenombres' => 'Mg. Yanina del Pilar Granados Rosas', 'cargo' => 'RESPONSABLE DE LA UNIDAD FORMULADORA (E)', 'oficina_id' => '76']);
        Personal::create(['apenombres' => 'Ing. Rinaldi Alberto Meza Lavado', 'cargo' => 'SUBGERENTE DE OBRAS', 'oficina_id' => '77']);
        Personal::create(['apenombres' => 'Ing. Edith Roberta Chuco Gutiérrez', 'cargo' => 'DIRECTOR REGIONAL DE TRANSPORTES Y COMUNICACIONES', 'oficina_id' => '78']);
        Personal::create(['apenombres' => 'Ing. Ana Marlene Rosario Guerrero', 'cargo' => 'GERENTE REGIONAL DE RECURSOS NATURALES Y GESTIÓN AMBIENTAL', 'oficina_id' => '79']);
        Personal::create(['apenombres' => 'Ing. Nancy Rubela Quiroz Sáenz', 'cargo' => 'SUBGERENTE DE GESTIÓN AMBIENTAL', 'oficina_id' => '80']);
        Personal::create(['apenombres' => 'Ing. Juan Andrés Bustamante Encinas', 'cargo' => 'GERENTE SUB REGIONAL EL PACIFICO', 'oficina_id' => '81']);
        Personal::create(['apenombres' => 'Ing. Herber Humberto Guarniz Leiva', 'cargo' => 'GERENTE SUB REGIONAL CONCHUCOS ALTO', 'oficina_id' => '82']);
        Personal::create(['apenombres' => 'Ing. Arturo Americo Torres Nolberto', 'cargo' => 'GERENTE SUB REGIONAL CONCHUCOS BAJO', 'oficina_id' => '83']);
        Personal::create(['apenombres' => 'Ing. Jeff Eduardo Cardenas Concha', 'cargo' => 'GERENTE GENERAL DEL PROYECTO ESPECIAL CHINECAS', 'oficina_id' => '84']);
        Personal::create(['apenombres' => 'Ing. Cesar Terrones Quezada', 'cargo' => 'GERENTE GENERAL AUTORIDAD PORTUARIA REGIONAL', 'oficina_id' => '85']);
        Personal::create(['apenombres' => 'Abog. Jose Antonio Jara Paredes', 'cargo' => 'GERENTE GENERAL DEL TERMINAL PORTUARIO DE CHIMBOTE', 'oficina_id' => '86']);
    }
}
