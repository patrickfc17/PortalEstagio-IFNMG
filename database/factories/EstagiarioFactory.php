<?php

namespace Database\Factories;

use App\Enums\EstadosCivisEnum;
use App\Enums\SexosEnum;
use App\Models\User;
use App\Traits\Memoizes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estagiario>
 */
class EstagiarioFactory extends Factory
{
    use Memoizes;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $users = [];

        return [
            'user_id' => UserFactory::memoized(User::class, $users, 1),
            'naturalidade' => fake()->city(),
            'uf' => fake()->stateABBR(),
            'data_nascimento' => fake()->dateTimeInInterval(interval: '+15 years')->format('Y-m-d'),
            'estado_civil' => fake()->randomElement(cases(EstadosCivisEnum::class)),
            'sexo' => fake()->randomElement(cases(SexosEnum::class)),
            'telefone_fixo' => fake()->phoneNumber(),
            'celular' => fake()->phoneNumber(),
        ];
    }
}
