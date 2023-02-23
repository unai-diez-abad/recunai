<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitante>
 */
class SolicitanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> fake()->name(),
            'apellidos'=> fake()->lastname(),
            'DNI'=> fake()->dni(),
            'direcion_residencia'=>fake()->address(),
            'email'=> fake()->unique()->safeEmail(),
            'tel'=>fake()->phoneNumber()
         ];
    }
}
