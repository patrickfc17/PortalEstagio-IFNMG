<?php

namespace Database\Seeders;

use App\Models\Endereco;
use App\Models\Estagiario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnderecosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::factory(Estagiario::count())->create();
    }
}
