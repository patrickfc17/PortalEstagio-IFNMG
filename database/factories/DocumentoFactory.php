<?php

namespace Database\Factories;

use App\Models\Estagiario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    private const UF_START = 0;
    private const UF_END = 2;

    private function fakeCpf(): string
    {
        return fake()->randomNumber(3, true)
            . '.'
            . fake()->randomNumber(3, true)
            . '.'
            . fake()->randomNumber(3, true)
            . '-'
            . fake()->randomNumber(2, true);
    }

    private function fakeRg(): string
    {
        return fake()->stateAbbr()
            . ' '
            . fake()->randomNumber(2, true)
            . '.'
            . fake()->randomNumber(3, true)
            . '.'
            . fake()->randomNumber(3, true);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $estagiarios = [];

        $rg = $this->fakeRg();

        return [
            'cpf' => $this->fakeCpf(),
            'estagiario_id' => EstagiarioFactory::memoized(Estagiario::class, $estagiarios),
            'rg' => $rg,
            'orgao_expedidor' => fake()->word() . '/' . substr($rg, self::UF_START, self::UF_END),
        ];
    }
}
