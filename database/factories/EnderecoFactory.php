<?php

namespace Database\Factories;

use App\Models\Estagiario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estagiario_id' => Estagiario::random(),
            'rua' => fake()->streetName(),
            'bairro' => fake()->streetSuffix() . ' ' . fake()->citySuffix(),
            'uf' => fake()->stateAbbr(),
            'cep' => fake()->countryCode(),
            'cidade' => fake()->city(),
            'numero' => fake()->buildingNumber(),
        ];
    }
}
