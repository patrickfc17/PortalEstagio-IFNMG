<?php

namespace Database\Factories;

use App\Traits\Memoizes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    use Memoizes;

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
            'password' => Hash::make(random_strong_password()),
            'profile' => 'https://avatar.iran.liara.run/public',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
