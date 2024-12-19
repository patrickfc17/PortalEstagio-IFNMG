<?php

namespace Database\Seeders;

use App\Models\Estagiario;
use App\Models\User;
use Illuminate\Database\Seeder;

class EstagiariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estagiario::factory(User::count() - 1)->create();
    }
}
