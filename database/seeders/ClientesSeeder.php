<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nombre' => "Johen",
            'apellido' => "Mendoza",
            'email' => "johen@testcorreo.com",
            /* 'password' => "", */
            'dni' => "20983099",
            'celular' => "9298192912",
            'direccion' => "Av. Aviación 3541, San Borja",
            /* 'reputacion' => "",
            'puntos' => "",
            'estado' => "",
            'fechaRegistro' => "",
            'passRecoveryToken' => "",
            'oauth_uid' => "",
            'qrCode' => "",
            'saldoBilletera' => "",
            'cuentaConfigurada' => "",
            'configAccounToken' => "",
            'distrito' => "",
            'latitud' => "",
            'longitud' => "",
            'store_id' => "", */
        ]);
    }
}
