<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Obra;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $obra= Obra::all()->pluck('id')->toArray();
        $usuario= User::all()->pluck('id')->toArray();
        return [
        'fecha_inicio' =>fake()->date(),
        'usuario_id' =>fake()->randomElement($usuario),
        'texto' =>fake()->text(),
        'obra_id' =>fake()->randomElement($obra)
        ];
    }
}
