<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convenio>
 */
class ConvenioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empresa' => fake()->company(),
            'curso' => fake()->randomElement(['Análise e Desenvolvimento de Sistemas', 'Processos Gerenciais', 'Enfermagem', 'Técnico em Informática']),
            'vagas' => fake()->numberBetween(1, 12),
        ];
    }
}
