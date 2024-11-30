<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'gender' => fake()->randomElement(['MALE', 'FEMALE']),
            'age' => fake()->numberBetween(17, 55),
            'phone' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl(),
            'team_id' => fake()->numberBetween(1, 35),
            'role_id' => fake()->numberBetween(1, 50),
        ];
    }
}
