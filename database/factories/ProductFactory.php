<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'price' => mt_rand(100, 1000) / 10.0,
            'weight' => mt_rand(1, 4) / 1.8,
            'quantity' => 50,
            'active' => $this->faker->boolean(),
            'image' => strval(mt_rand(1, 5)) . '.jpg',
            'description' => $this->faker->paragraph(),
        ];
    }
}
