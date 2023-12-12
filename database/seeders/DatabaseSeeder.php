<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Accion::factory(7)->create();
        \App\Models\ActividadDenuncia::factory(7)->create();
        \App\Models\ActividadEconomica::factory(7)->create();
        \App\Models\Anno::factory(7)->create();
        \App\Models\Empleador::factory(7)->create();
        \App\Models\Modalidad::factory(7)->create();
        \App\Models\Afp::factory(7)->create();
        \App\Models\EstadoContrato::factory(7)->create();
        \App\Models\TipoContrato::factory(7)->create();
        \App\Models\Trabajador::factory(7)->create();
        \App\Models\Documento::factory(7)->create();
        \App\Models\Contrato::factory(7)->create();
    }
}
