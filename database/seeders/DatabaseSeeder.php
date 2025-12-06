<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criar usuário admin padrão
        User::create([
            'name' => 'Administrador',
            'email' => 'vendas@fabricadefardamentos.com',
            'password' => bcrypt('fabricadefardamentos123'),
        ]);

        // Seeders de dados
        $this->call([
            EmpresaSeeder::class,
            ProdutoSeeder::class,
        ]);
    }
}
