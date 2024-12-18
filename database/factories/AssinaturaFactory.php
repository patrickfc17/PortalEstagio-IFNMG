<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assinatura>
 */
class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $users = [];

        return [
            'user_id' => UserFactory::memoized(User::class, $users),
            'assinado_em' => fake()->dateTime()->format('Y-m-d H:i:s'),
        ];
    }
}
