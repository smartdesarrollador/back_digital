<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 1",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen1.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 2",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen2.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen2.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 3",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen3.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen3.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 4",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen4.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen4.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 5",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen5.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen5.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 6",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen6.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen6.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('testimonios')->insert([
            'Titulo' => "TESTIMONIO 7",
            'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed eros et elit sodales laoreet. Sed vel nibh sit amet mauris bibendum semper. Nullam ac nunc ut nunc eleifend ultrices. Morbi non nibh ac neque consectetur laoreet.",
            'imagen' => "imagen7.jpg",
            'ruta_imagen' => "assets/imagen/testimonios/imagen7.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
