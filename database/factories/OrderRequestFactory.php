<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => $this->faker->randomDigitNotNull(),
            'driver_id' => $this->faker->randomDigitNotNull(),
            'acceptor_id' => $this->faker->randomDigitNotNull(),
            'car_id' => $this->faker->randomDigitNotNull(),
            'accepted' => $this->faker->boolean(),
            'note' => $this->faker->word(),
        ];
    }
}
