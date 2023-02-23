<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComunicationMediumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [           
            'comunication_medio'=>$this->faker->unique()->randomElement(['Email','Telefonica','Skype','Whatsapp','Facebook'])
        ];
    }
}
