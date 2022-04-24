<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $professionnal = $this->faker->boolean();
            if(!$professionnal || ($professionnal && $this->faker->boolean())) {
                $name = $this->faker->lastName;
                $firstName = $this->faker->firstName;
            } else {
                $name = null;
                $firstName = null;
            }
            return [
                'professionnal' => $professionnal,
                'civility' => $this->faker->boolean() ? 'Mme': 'M.',
                'name' => $name,
                'firstname' => $firstName,
                'company' => $professionnal ? $this->faker->company : null,
                'address' => $this->faker->streetAddress,
                'addressbis' => $this->faker->boolean() ? $this->faker->secondaryAddress : null,
                'bp' => $this->faker->boolean() ? $this->faker->numberBetween(100, 900) : null,
                'postal' => $this->faker->numberBetween(10000, 90000),
                'city' => $this->faker->city,
                'country_id' => mt_rand(1,4),
                'phone' => $this->faker->numberBetween(1000000000, 9000000000),
            ];

    }
}
