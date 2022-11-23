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
            'nome'         => 'Frango Grelhado',
            'quantidade'   => 14,
            'valor'        => 14,
            'descricao'    => 'com purê de batata doce , creme de espinafre e brócolis.',
            'categoria_id' => 1

        ]);

        Produto::create([
            'nome'         => 'Panqueca Integral',
            'quantidade'   => 14,
            'valor'        => 14,
            'descricao'    => 'Panquecas integral de carne com mix de legumes.',
            'categoria_id' => 1
        ]);

        Produto::create([
            'nome'         => 'Coxa e Sobrecoxa',
            'quantidade'   => 14,
            'valor'        => 14,
            'descricao'    => 'Coxa e sobrecoxa com arroz e feijão e legumes.',
            'categoria_id' => 1,
        ]);

        Produto::create([
            'nome'         => 'Strogonoff de Carne',
            'quantidade'   => 14,
            'valor'        => 14,
            'descricao'    => 'Strogonoff de carne, arroz integral , brócolis e abobrinhas.',
            'categoria_id' => 1
        ]);
    }
}
