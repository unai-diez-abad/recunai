<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Solicitante;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obra>
 */
class ObraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Solicitud= Solicitante::all()->pluck('id')->toArray();
        
        return [
            'tipo_edificio'=> fake()->randomElement(['Piso','Casa','Garaje','Trastero','Edificio']),
            'tipo_obra'=> fake()->randomElement(['Nueva Construccion','Reforma']),
            'direcion'=> fake()->address(),
            'fecha_inicio'=> fake()->dateTimeBetween('-30 days', '+0 days'),
            'fecha_fin'=> fake()->dateTimeBetween('+10 days', '+65 days'),
            'descripcion'=> fake()->text(),
            'solicitante_id'=> fake()->randomElement($Solicitud)
        ];
    }
}
