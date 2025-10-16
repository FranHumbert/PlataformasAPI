<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $generos = ['Acción', 'Aventura', 'Deportes', 'Estrategia', 'RPG',
         'Simulación', 'Puzzle', 'Terror', 'Carreras', 'Lucha'];

        return [
            'titulo' => $this->faker->unique()->sentence(3),
            'año_lanzamiento' => $this->faker->numberBetween(1980, 2025),
            'genero' => $this->faker->randomElement($generos),
        ];
    }
}
