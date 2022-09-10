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
            'nome'         => 'Abobrinha',
            'quantidade'   => 10,
            'valor'        => 7,
            'categoria_id' => 3

        ]);

        Produto::create([
            'nome'         => 'Melancia',
            'quantidade'   => 5,
            'valor'        => 15,
            'categoria_id' => 2
        ]);

        Produto::create([
            'nome'         => 'Frango',
            'quantidade'   => 15,
            'valor'        => 22,
            'categoria_id' => 1
        ]);
    }
}
