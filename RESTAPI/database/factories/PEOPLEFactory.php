<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class PEOPLEFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Name'=>$this->faker->name(),
            'LastName'=>$this->faker->lastName(),
            'street'=>$this->faker->streetName(),
            'City'=>$this->faker->city(),
            'Country'=>$this->faker->country()
        ];
    }
}
