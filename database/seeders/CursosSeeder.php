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

        DB::table('cursos')->insert([
            'nombre' => "Marketing Digital",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "2 año",
            'imagen' => "imagen2.jpg",
            'maestro' => "maestro2",
            'curso_observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'tipo_curso_id' => 1,
        ]);

        DB::table('cursos')->insert([
            'nombre' => "Especialidad 1",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "1 año",
            'imagen' => "imagen1.jpg",
            'maestro' => "maestro1",
            'curso_observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'tipo_curso_id' => 2,
        ]);

        DB::table('cursos')->insert([
            'nombre' => "Especialidad 2",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "2 año",
            'imagen' => "imagen2.jpg",
            'maestro' => "maestro2",
            'curso_observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'tipo_curso_id' => 2,
        ]);

    }
}
