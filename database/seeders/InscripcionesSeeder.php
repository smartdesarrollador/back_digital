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
            'cliente_id' => 1,
            'telefono' => "928238817",
            'fecha_inscripcion' => "2023-05-01",
            'precio_total' => 1000,
            'horario_inscripcion' => "01:08:40",
        ]);
    }
}
