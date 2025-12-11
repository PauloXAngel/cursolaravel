<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();

        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomFloat(2, 10, 999),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400, 400, null, false),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
