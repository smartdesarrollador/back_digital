<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            'nombre_curso' => "Analitica Digital",
            'descripcion_curso' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "1 año",
            'imagen_curso' => "imagen1.jpg",
            'maestro' => "maestro1",
            'curso_observaciones' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'tipo_curso_id' => 1,
        ]);
    }
}
