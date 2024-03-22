<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mision')->insert([
            'id_mision' => 1,
            'imagen_mision' => "imagen.jpg",
            'url_imagen_mision' => "assets/imagen/imagen.jpg",
            'titulo_mision' => 'Titulo Misión',
            'contenido_mision' => 'Contenido de Misión',
        ]);
    }
}
