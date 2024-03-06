<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LoginLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $datesRange = \Carbon\CarbonPeriod::create('2023-09-01', '2023-11-31');
        $datesArray = [];
        foreach ($datesRange as $date) {
            $datesArray[] = $date;
        }
        $randomDate = collect($datesArray)->random();
        return [
            'username' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'ip_address' => $this->faker->ipv4,
            'created_at' => $randomDate->format('Y-m-d H:i:s'),
        ];
    }
}
