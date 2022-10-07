<?php

namespace Database\Factories;

use Faker\Provider\Fakecar;
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
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();

        return [
            'type' => $this->faker->randomElement(['transport','goods']),
            'name' => $this->faker->vehicle,
            'plate_number' => $this->faker->vehicleRegistration,
            'fuel' => $this->faker->vehicleFuelType,
            'in_use'=> $this->faker->boolean(),
            'need_rapir' => $this->faker->boolean(),
            'company_vehicle' => $this->faker->boolean()
        ];
    }
}
