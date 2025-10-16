<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plataforma>
 */
class PlataformaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plataformas = [
            ['nombre' => 'PlayStation 5', 'fabricante' => 'Sony'],
            ['nombre' => 'Xbox Series X', 'fabricante' => 'Microsoft'],
            ['nombre' => 'Nintendo Switch', 'fabricante' => 'Nintendo'],
            ['nombre' => 'PC', 'fabricante' => 'Varios'],
            ['nombre' => 'PlayStation 4', 'fabricante' => 'Sony'],
            ['nombre' => 'Xbox One', 'fabricante' => 'Microsoft'],
            ['nombre' => 'Nintendo 3DS', 'fabricante' => 'Nintendo'],
            ['nombre' => 'Steam Deck', 'fabricante' => 'Valve'],
        ];

        $plataforma = $this->faker->randomElement($plataformas);

        return [
            'nombre' => $plataforma['nombre'],
            'fabricante' => $plataforma['fabricante'],
        ];
    
    }
}
