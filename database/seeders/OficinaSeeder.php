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
        Oficina::create(['name' => 'Órgano de Control Institucional']);
        Oficina::create(['name' => 'Consejo de Coordinación Regional']);
        Oficina::create(['name' => 'Procuraduría Publica Regional']);
        Oficina::create(['name' => 'Oficina de Imagen Institucional']);
        Oficina::create(['name' => 'Secretaria General']);
        Oficina::create(['name' => 'Oficina Regional de Defensa Nacional']);
        Oficina::create(['name' => 'Gestión del Riesgo de Desastres']);
        Oficina::create(['name' => 'Centro de Operaciones de Emergencia Regional']);
        Oficina::create(['name' => 'Seguridad Ciudadana']);
        Oficina::create(['name' => 'Gerencia Regional de Asesoría Jurídica']);
        Oficina::create(['name' => 'Gerencia Regional de Administración']);
        Oficina::create(['name' => 'Subgerencia de Administración Financiera']);
        Oficina::create(['name' => 'Subgerencia de Abastecimiento y Servicio Generales']);
        Oficina::create(['name' => 'Subgerencia de Recursos Humanos']);
        Oficina::create(['name' => 'Subgerencia de Control Patrimonial']);
        Oficina::create(['name' => 'Subgerencia de Tecnologías de la Información e Innovación']);
        Oficina::create(['name' => 'Unidad de Servicios y Equipo Mecánico']);
        Oficina::create(['name' => 'Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial']);
        Oficina::create(['name' => 'Subgerencia de Planeamiento y Acondicionamiento Territorial']);
        Oficina::create(['name' => 'Subgerencia de Presupuesto']);
        Oficina::create(['name' => 'Subgerencia de Promoción y Programación Multianual de Inversiones']);
        Oficina::create(['name' => 'Subgerencia de Modernización y Desarrollo Institucional']);
        Oficina::create(['name' => 'Gerencia Regional de Desarrollo Económico']);
        Oficina::create(['name' => 'Subgerencia de Desarrollo Empresarial']);
        Oficina::create(['name' => 'Dirección Regional de Agricultura']);
        Oficina::create(['name' => 'Dirección Regional de la Producción']);
        Oficina::create(['name' => 'Dirección Regional de Comercio Exterior y Turismo']);
        Oficina::create(['name' => 'Dirección Regional de Energía y Minas']);
        Oficina::create(['name' => 'Gerencia Regional de Desarrollo Social']);
        Oficina::create(['name' => 'Subgerencia de Programas Sociales e Igualdad de Oportunidades']);
        Oficina::create(['name' => 'Aldeas Infantiles']);
        Oficina::create(['name' => 'Archivo Regional']);
        Oficina::create(['name' => 'Dirección Regional de Educación']);
        Oficina::create(['name' => 'Dirección Regional de Salud']);
        Oficina::create(['name' => 'Dirección Regional de Trabajo y Promoción de Empleo']);
        Oficina::create(['name' => 'Dirección Regional de Vivienda, Construcción y Saneamiento']);
        Oficina::create(['name' => 'Gerencia Regional de Infraestructura']);
        Oficina::create(['name' => 'Subgerencia de Estudios de Inversiones']);
        Oficina::create(['name' => 'Subgerencia de Obras']);
        Oficina::create(['name' => 'Subgerencia de Supervisión y Liquidación de Obras']);
        Oficina::create(['name' => 'Dirección Regional de Transportes y Comunicaciones']);
        Oficina::create(['name' => 'Gerencia Regional de Recursos Naturales y Gestión Ambiental']);
        Oficina::create(['name' => 'Subgerencia de Gestión Ambiental']);
    }
}
