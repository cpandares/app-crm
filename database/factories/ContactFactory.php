<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $phone = $this->faker->unique()->phoneNumber;
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail, 
            'phone' => $phone,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'postcode' => rand(20000, 29999),
            'contact_status' => rand(1,6),
            'user_id' => rand(1,10),
            'comunication_medium' => rand(1,5)
        ];
    }
}
