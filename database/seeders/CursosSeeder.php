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
            'nombre' => "Analitica Digital",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "1 año",
            'imagen' => "imagen1.jpg",
            'maestro' => "maestro1",
            'curso_observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'tipo_curso_id' => 1,
        ]);
    }
}
