<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoInscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('curso_inscripciones')->insert([
            'inscripcion_id' => 1,
            'curso_id' => 1,
            'cantidad' => 1,
            'item_descripcion' => "Lorem ipsum dolor sit amet consectetur adipisicing", 
        ]);
    }
}
