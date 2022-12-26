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
            'name'=> $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1,8),
            'description' => $this->faker->paragraph(),
            'price'=> $this->faker->numberBetween(100000, 10000000),
            'photo'=> $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
