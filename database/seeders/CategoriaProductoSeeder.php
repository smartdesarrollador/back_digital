<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_productos')->insert([
            'nombre' => "Cursos",
            'descripcion' => "Lorem, ipsum dolor sit amet consectetur",
            'imagen' => "imagen1.jpg",
        ]);

        DB::table('categoria_productos')->insert([
            'nombre' => "Especialidades",
            'descripcion' => "Lorem, ipsum dolor sit amet consectetur",
            'imagen' => "imagen2.jpg",
        ]);
    }
}
