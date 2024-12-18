<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            EstagiariosSeeder::class,
            FiliacoesSeeder::class,
            DocumentosSeeder::class,
            EnderecosSeeder::class,
            MatriculasSeeder::class,
            AssinaturasSeeder::class,
            ConveniosSeeder::class,
        ]);
    }
}
