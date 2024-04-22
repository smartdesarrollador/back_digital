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
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "1 año",
            'imagen' => "imagen1.jpg",
            'maestro' => "maestro1",
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Marketing Digital",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "2 año",
            'imagen' => "imagen2.jpg",
            'maestro' => "maestro2",
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'categoria_producto_id' => 1,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Especialidad 1",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "1 año",
            'imagen' => "imagen1.jpg",
            'maestro' => "maestro1",
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "1000",
            'categoria_producto_id' => 2,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Especialidad 2",
            'descripcion' => "Lorem ipsum dolor sit amet consectetur",
            'duracion' => "2 año",
            'imagen' => "imagen2.jpg",
            'maestro' => "maestro2",
            'observacion' => "Lorem ipsum dolor sit amet consectetur",
            'precio' => "500",
            'categoria_producto_id' => 2,
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
