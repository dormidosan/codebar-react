<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reactivo>
 */
class ReactivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->randomNumber(5),
            'nombre' => $this->faker->name(),
            'volumen' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
