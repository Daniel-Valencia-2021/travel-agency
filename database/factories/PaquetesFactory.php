<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaquetesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nombre' => fake()->name(),
                'descripcion' => fake()->paragraph(),
                'precio' => $this->faker->numberBetween(100, 1000),
                'created_at' => now(),
                'updated_at' => now(),
        ];
    }
}
