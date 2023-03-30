<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->streetName();

        return [
                'name' => $name,
                'price' => fake()->randomFloat($nbMaxDecimals = 1, $min = 10, $max = 100)
        ];
    }
}
