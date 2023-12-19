<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoContratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_contratos')->insert([
            'id_estado_contratos' => 1,
            'estado_contrato' => 'true',
        ]);

        DB::table('estado_contratos')->insert([
            'id_estado_contratos' => 2,
            'estado_contrato' => 'false',
        ]);

        DB::table('estado_contratos')->insert([
            'id_estado_contratos' => 3,
            'estado_contrato' => 'true',
        ]);

        DB::table('estado_contratos')->insert([
            'id_estado_contratos' => 4,
            'estado_contrato' => 'true',
        ]);
    }
}
