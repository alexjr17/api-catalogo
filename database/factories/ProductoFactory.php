<?php

namespace Database\Factories;

use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'size' => $this->faker->randomElement(['S', 'M', 'L']),
            'observations' => $this->faker->sentence(),
            'marca_id' => Marca::all()->random()->id,
            'inventory' => $this->faker->randomNumber(2),
            'date' => $this->faker->date()
        ];
    }
}
