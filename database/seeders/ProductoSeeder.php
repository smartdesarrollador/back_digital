<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('productos')->insert([
            'nombre' => "Analitica Digital",
            'resumen' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'descripcion' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'duracion' => "1 año",
            'imagen' => "producto1.jpg",
            'ruta_imagen' => "assets/imagen/producto/producto1.jpg",
            /* 'maestro' => "maestro1", */
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Marketing Digital",
            'resumen' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'descripcion' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'duracion' => "2 año",
            'imagen' => "producto2.jpg",
            'ruta_imagen' => "assets/imagen/producto/producto2.jpg",
            /* 'maestro' => "maestro2", */
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Especialidad 1",
            'resumen' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'descripcion' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'duracion' => "1 año",
            'imagen' => "producto3.jpg",
            'ruta_imagen' => "assets/imagen/producto/producto3.jpg",
            /* 'maestro' => "maestro1", */
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'categoria_producto_id' => 2,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Especialidad 2",
            'resumen' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'descripcion' => "<p>Lorem ipsum dolor sit amet consectetur</p>",
            'duracion' => "2 año",
            'imagen' => "producto4.jpg",
            'ruta_imagen' => "assets/imagen/producto/producto4.jpg",
            /* 'maestro' => "maestro2", */
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'categoria_producto_id' => 2,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
