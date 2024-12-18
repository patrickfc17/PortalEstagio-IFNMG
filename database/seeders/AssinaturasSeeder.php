<?php

namespace Database\Seeders;

use App\Models\Assinatura;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssinaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assinatura::factory(User::count())->create();
    }
}
