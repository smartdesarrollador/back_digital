<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trabajadores')->insert([
            'trabajador' => fake()->name(),
            'apellido_paterno' => fake()->firstName(),
            'apellido_materno' => fake()->lastName(),
            'primer_nombre' => fake()->firstName(),
            'segundo_nombre' => fake()->lastName(),
            //'id_tipo_documento' => TipoDocumento::all()->random()->id,
            'numero_documento' => fake()->numberBetween(0, 100),
            'fecha_nacimiento' => fake()->date('Y-m-d', 'now'),
            'ruc' => fake()->numberBetween(90000000, 99999999),
            'direccion' => fake()->secondaryAddress(),
            'referencia' => fake()->secondaryAddress(),
            //'id_ubigeo' => Ubigeo::all()->random()->id,
            'telefono' => fake()->numberBetween(1000000, 9999999),
            'celular' => fake()->numberBetween(90000000, 99999999),
            'correo' => fake()->email(),
            'id_empleador' => fake()->numberBetween(DB::table('empleadores')->min('id_empleador'), DB::table('empleadores')->max('id_empleador')),
            //'id_regimen_laboral' => RegimenLaboral::all()->random()->id,
            //'id_ocupacion' => Ocupacion::all()->random()->id,
            'id_tipo_contrato' => fake()->numberBetween(DB::table('tipo_contratos')->min('id_tipo_contrato'), DB::table('tipo_contratos')->max('id_tipo_contrato')),
            //'id_jornada_laboral' => JornadaLaboral::all()->random()->id,
            //'id_estado_trabajador' => EstadoTrabajador::all()->random()->id,
            'fecha_estado' => fake()->date('Y-m-d', 'now'),
            //'id_regimen_salud' => RegimenSalud::all()->random()->id,
            //'id_regimen_pensiones' => RegimenPensiones::all()->random()->id,
            'id_afp' => fake()->numberBetween(DB::table('afps')->min('id_afp'), DB::table('afps')->max('id_afp')),
            'cuspp' => fake()->word(),
            'es_discapacitado' => fake()->word(),
            'es_sindicalizado' => fake()->word(),
            'fecha_ingreso' => fake()->date('Y-m-d', 'now'),
            'fecha_egreso' => fake()->date('Y-m-d', 'now'),
            //'id_motivo_baja' => MotivoBaja::all()->random()->id,
            'fecha_baja' => fake()->date('Y-m-d', 'now'),
        ]);
    }
}
