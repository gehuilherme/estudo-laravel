<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patients>
 */
class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'document' => fake()->numerify('###########'),
            'smoker' => fake()->randomElement(['true', 'false']),
            'allergies' => fake()->randomElement(['true', 'false']),
            'diabetic' => fake()->randomElement(['true', 'false']),
            'high_pressure' => fake()->randomElement(['true', 'false']),
            'dsts' => fake()->randomElement(['true', 'false']),
            'more_information' => null,
        ];
    }
}
