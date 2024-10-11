<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'status' => $this->faker->paragraph,
            'quantity' => $this->faker->numberBetween(1,10),
            'customer_id' => $this->faker->numberBetween(1,10),
            'product_id' => $this->faker->numberBetween(1,10),  
            'amount' => $this->faker->numberBetween(1,10),
        ];
    }
}
