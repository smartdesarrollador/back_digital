<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TiposMediosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_medios')->insert([
            'id_tipos_medios' => 1,
            'nombre' => "banners",
        ]);

        DB::table('tipos_medios')->insert([
            'id_tipos_medios' => 2,
            'nombre' => "services",
        ]);
    }
}
