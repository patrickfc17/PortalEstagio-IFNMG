<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\Estagiario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documento::factory(Estagiario::count())->create();
    }
}
