<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motivo;

class MotivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Motivo::create(['titulo' => 'Apropiación o uso indebido de recursos o bienes del Estado', 'descripcion' => 'Cuando personal de la entidad se adueña o usa dinero o bienes que le confiaron por su cargo.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Favorecimiento indebido', 'descripcion' => 'Cuando personal de la entidad usa su cargo para favorecer irregularmente a alguien por un interés particular o interés ajeno al cumplimiento de sus funciones.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Invocación de influencias en el Estado', 'descripcion' => 'Cuando personal de la entidad utiliza o finge su capacidad de influencia en el sector público.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Acceso a ventajas indebidas', 'descripcion' => 'Cuando personal de la entidad propicia, solicita o acepta algún beneficio (regalos, donaciones a título personal, bienes, incentivos, cortesías o favores) no permitido.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Incumplimiento de normas de integridad y transparencia', 'descripcion' => 'cuando personal de la entidad incumple las disposiciones sobre conflictos de intereses, transparencia, acceso a la información pública, neutralidad electoral, gestión de intereses (lobby), impedimento, cumplimiento de requisitos, entre otros.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Abuso de autoridad', 'descripcion' => 'Cuando personal de la entidad comete u ordena un acto arbitrario alegando el cumplimiento de sus funciones.', 'activo' => 1, 'borrado' => 0]);

        Motivo::create(['titulo' => 'Otros', 'descripcion' => 'Cualquier acto contrario a la Ley del Código de Ética de la Función Pública o vinculado a otros actos de corrupción.', 'activo' => 1, 'borrado' => 0]);
        
    }
}
