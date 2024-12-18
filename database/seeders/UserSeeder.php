<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Teste',
            'email' => 'teste@aluno.ifnmg.edu.br',
            'password' => Hash::make('teste@Admin123'),
            'profile' => 'https://avatar.iran.liara.run/public',
        ]);

        User::factory(20)->create();
    }
}
