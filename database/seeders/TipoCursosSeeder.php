<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_cursos')->insert([
            'nombre' => "Informatica",
            'descripcion' => "Lorem, ipsum dolor sit amet consectetur",
            'imagen' => "imagen1.jpg",
        ]);
    }
}
