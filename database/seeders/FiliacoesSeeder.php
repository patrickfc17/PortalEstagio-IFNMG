<?php

namespace Database\Seeders;

use App\Models\Estagiario;
use App\Models\Filiacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filiacao::factory(Estagiario::count())->create();
    }
}
