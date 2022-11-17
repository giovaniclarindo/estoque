<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome'         => 'frango',
            'quantidade'   => 15,
            'valor'        => 22,
            'descricao'    => 'Descricao 1',
            'categoria_id' => 1

        ]);

        Produto::create([
            'nome'         => 'Melancia',
            'quantidade'   => 5,
            'valor'        => 15,
            'descricao'    => 'Descricao 2',
            'categoria_id' => 2
        ]);

        Produto::create([
            'nome'         => 'Abobrinha',
            'quantidade'   => 10,
            'valor'        => 7,
            'descricao'    => 'Descricao 3',
            'categoria_id' => 3
        ]);
    }
}
