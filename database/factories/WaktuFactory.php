<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WaktuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jam' => $this->faker->time('H:i:s'),
        ];
    }
}
