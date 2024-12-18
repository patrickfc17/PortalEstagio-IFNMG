<?php

namespace Database\Factories;

use App\Models\Estagiario;
use App\Models\Filiacao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filiacao>
 */
class FiliacaoFactory extends Factory
{
    protected $model = Filiacao::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $estagiarios = [];

        return [
            'estagiario_id' => EstagiarioFactory::memoized(Estagiario::class, $estagiarios),
            'nome_mae' => fake()->firstNameFemale() . ' ' . fake()->lastName(),
            'nome_pai' => fake()->firstNameMale() . ' ' . fake()->lastName(),
        ];
    }
}
