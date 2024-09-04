<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaActual = Carbon::now();

        DB::table('banner_contactos')->insert([
            'id_banner_contacto' => 1,
            'imagen' => "banner_1.jpg",
            'ruta_imagen' => "assets/imagen/banner/contacto/banner_1.jpg",
            'created_at' => $horaActual,
            'updated_at' => $horaActual,
        ]);
    }
}
