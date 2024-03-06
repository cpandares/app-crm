<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [           
            'status_name'=>$this->faker->unique()->randomElement(['Nuevo','En Negociacion','Presupuesto Enviado','Cliente','No Interesado'])
        ];
    }
}
