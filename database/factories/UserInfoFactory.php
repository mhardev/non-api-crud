<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' =>fake()->firstName(),
            'last_name' =>fake()->lastName(),
            'sex' => fake()->randomElement(['male', 'female']),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
