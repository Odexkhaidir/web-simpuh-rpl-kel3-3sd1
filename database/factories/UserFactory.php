<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name, // Nama user
            'email' => $this->faker->unique()->safeEmail, // Email unik
            'email_verified_at' => now(), // Tanggal verifikasi email
            'password' => bcrypt('password'), // Password default
            'remember_token' => Str::random(10), // Token random
        ];
    }
}
