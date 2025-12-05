<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriasSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('categorias')->insert([
                'nome' => Str::random(8),
                'descricao' => fake()->sentence(), // <- ADICIONADO
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
