<?php

namespace Database\Factories;

use App\Enums\PeriodosEnum;
use App\Enums\TurnosEnum;
use App\Models\Estagiario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $estagiarios = [];

        return [
            'numero_matricula' => fake()->randomNumber(6, true),
            'estagiario_id' => EstagiarioFactory::memoized(Estagiario::class, $estagiarios),
            'curso' => fake()->randomElement(['Análise e Desenvolvimento de Sistemas', 'Processos Gerenciais', 'Enfermagem', 'Técnico em Informática']),
            'turma' => fake()->randomElement(['ADS', 'PG', 'INFO', 'ENF'])
                . ' '
                . fake()->dateTimeBetween('-10 years')->format('Y'),
            'cursando' => fake()->boolean(),
            'tipo_periodo' => fake()->randomElement(cases(PeriodosEnum::class)),
            'numero_periodo' => fake()->randomDigitNotNull(),
            'turno' => fake()->randomElement(cases(TurnosEnum::class)),
            'integralizado' => fake()->boolean(),
            'periodo_integralizacao' => fake()->randomFloat(1, 2.5, 6),
        ];
    }
}
