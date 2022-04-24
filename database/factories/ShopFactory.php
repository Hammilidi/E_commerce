<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'holder' => strtoupper($this->faker->sentence(3)),
            'bic' => strtoupper(Str::class),
            'iban' => $this->faker->iban,
            'bank' => $this->faker->sentence(2),
            'bank_address' => $this->faker->address,
            'facebook' => $this->faker->url,
            'home' => $this->faker->sentence(3),
            'home_infos' => $this->faker->text,
            'home_shipping' => $this->faker->text,
        ];
    }
}
