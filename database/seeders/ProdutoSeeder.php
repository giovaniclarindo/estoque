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
            'nome'         => 'Teclado',
            'quantidade'   => 10,
            'valor'        => 120
        ]);

        Produto::create([
            'nome'         => 'Mouse',
            'quantidade'   => 5,
            'valor'        => 240
        ]);

        Produto::create([
            'nome'         => 'Monitor',
            'quantidade'   => 15,
            'valor'        => 1800
        ]);
    }
}
