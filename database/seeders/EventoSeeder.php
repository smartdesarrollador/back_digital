<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        $horaActual = Carbon::now();

        DB::table('eventos')->insert([
            'id_evento' => 1,
            'titulo' => "Evento 1",
            'fecha' => "2024-04-15",
            'codigo' => "<h1>hola</h1>",
            'imagen' => "imagen_1.jpg",
            'ruta_imagen' => "assets/imagen/evento/imagen_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('eventos')->insert([
            'id_evento' => 2,
            'titulo' => "Evento 2",
            'fecha' => "2024-04-15",
            'codigo' => "<h1>hola</h1>",
            'imagen' => "imagen_2.jpg",
            'ruta_imagen' => "assets/imagen/evento/imagen_2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('eventos')->insert([
            'id_evento' => 3,
            'titulo' => "Evento 3",
            'fecha' => "2024-04-15",
            'codigo' => "<h1>hola</h1>",
            'imagen' => "imagen_3.jpg",
            'ruta_imagen' => "assets/imagen/evento/imagen_3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

        DB::table('eventos')->insert([
            'id_evento' => 4,
            'titulo' => "Evento 4",
            'fecha' => "2024-04-15",
            'codigo' => "<h1>hola</h1>",
            'imagen' => "imagen_4.jpg",
            'ruta_imagen' => "assets/imagen/evento/imagen_4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,

        ]);

       

        
    }
}
