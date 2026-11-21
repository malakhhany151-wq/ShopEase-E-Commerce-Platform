<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'describtion' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10 , 1000),
            'stock' => fake()-> numberBetween(1, 100),
            'categories_id' => category::factory(),
            'image' => 'null',
        ];
    }
}
