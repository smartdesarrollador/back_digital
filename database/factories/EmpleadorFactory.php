<?php

namespace Database\Factories;

/* use App\Models\Ubigeo;
use App\Models\Sector; */

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleador>
 */
class EmpleadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empleador' => fake()->firstName(),
        'ruc' => fake()->numberBetween(90000000, 99999999),
        'domicilio' => fake()->secondaryAddress(),
        /* 'id_ubigeo' => Ubigeo::all()->random()->id,
        'id_sector' => Sector::all()->random()->id */
        ];
    }
}
