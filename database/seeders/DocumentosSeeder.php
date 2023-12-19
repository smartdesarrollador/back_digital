<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documentos')->insert([
            'id_contrato' => 1,
            'contrato' => '',
            'id_empleador' => 1,
            'id_documento' => 1,
            'fecha' => '2023-11-01',
            'fecha_vencimiento' => '2023-11-10',
            'id_estado_contrato' => 1,
            'id_modalidad' => 1,
            'id_tipo_contrato' => 1,
        ]);
    }
}
