<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oficina;

class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oficina::create(['name' => 'Consejo Regional']);
        Oficina::create(['name' => 'Gobernación Regional']);
        Oficina::create(['name' => 'Organo de Control Institucional']);
        Oficina::create(['name' => 'Consejo de Coordinación Regional']);
    }
}
