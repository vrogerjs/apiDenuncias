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
        Personal::create(['apenombres' => 'Koki Noriega Brito', 'cargo' => 'Gobernador Regional', 'oficina_id' => '2']);

    }
}
