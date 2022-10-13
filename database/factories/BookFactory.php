<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            'id_peserta' => random_int(1,2),
            'tanggal' => $this->faker->date('Y-m-d'),
            'jam' => $this->faker->time('H:i:s'),
            
        ];
    }
}
