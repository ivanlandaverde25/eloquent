<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perfil>
 */
class PerfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trabajo' => fake()->jobTitle(),
            'telefono' => fake()->numerify('####-####'),
            'sitio_web' => fake()->optional(60)->domainName(),
            'direccion' => fake()->address(),
            'ciudad' => fake()->city(),
            'pais' => fake()->country()
        ];
    }
}
