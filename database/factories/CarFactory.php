<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['transport','goods']),
            'name' => $this->faker->word(),
            'plate_number' => $this->faker->randomNumber(5, true),
            'in_use'=> $this->faker->boolean(),
            'need_rapir' => $this->faker->boolean(),
            'company_vehicle' => $this->faker->boolean()
        ];
    }
}
