<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carousel')->insert([
            'id_carousel' => 1,
            'nombre_carousel' => "imagen1.jpg",
            'url_carousel' => "assets/imagene/carousel/imagen1.jpg",

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 2,
            'nombre_carousel' => "imagen2.jpg",
        'url_carousel' => "assets/imagene/carousel/imagen2.jpg",
        ]);
    
    DB::table('carousel')->insert([
            'id_carousel' => 3,
            'nombre_carousel' => "imagen3.jpg",
            'url_carousel' => "assets/imagene/carousel/imagen3.jpg",

        ]);

        DB::table('carousel')->insert([
            'id_carousel' => 4,
            'nombre_carousel' => "imagen4.jpg",
            'url_carousel' => "assets/imagene/carousel/imagen4.jpg",

        ]);
    }
}
