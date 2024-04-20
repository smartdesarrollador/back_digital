<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inscripciones')->insert([
            'clientes_id' => 1,
            'telefono' => "928238817",
            'fecha_inscripcion' => "01/05/2023",
            'precio_total' => 1000,
            'horario_inscripcion' => "01:08:40",
        ]);
    }
}
