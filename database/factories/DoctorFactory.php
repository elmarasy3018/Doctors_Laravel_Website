<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->unique()->e164PhoneNumber(),
            'address' => fake()->unique()->address(),
            'specialty' => fake()->unique()->jobTitle(),
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'image' => 'images/' . rand(1, 4) . '.png',
        ];
    }
}
