<?php

namespace Database\Factories;
use App\Models\PEOPLE;
use Illuminate\Database\Eloquent\Factories\Factory;
class PEOPLEFactory extends Factory
{
    public function definition()
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
