<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;


class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create([
            
            'nome'                    => 'lucas' ,
            'telefone'                => '21969934621',
            'observacao'              => 'sem mostard',
            'status'                  => '1',
            'rua'                     => 'rua de baixo',
            'numero'                  => '00',
            'bairro'                  => 'jacarepagua',
            'complemento_observacao'  => 'subindo a rua casa 12',
            'CEP'                     => '22041-080',
        ]);

        Pedido::create([
            
            'nome'                    => 'João' ,
            'telefone'                => '21996699669',
            'observacao'              => 'com mostard',
            'status'                  => '2',
            'rua'                     => 'rua de cima',
            'numero'                  => '12',
            'bairro'                  => 'crocodilopagua',
            'complemento_observacao'  => 'descendo a rua na casa 21',
            'CEP'                     => '23580-430',
        ]);
        Pedido::create([
            
            'nome'                    => 'Matheus' ,
            'telefone'                => '21998654528',
            'observacao'              => 'com pouca pimentas',
            'status'                  => '3',
            'rua'                     => 'Rua da Alfândega',
            'numero'                  => '88',
            'bairro'                  => 'botafogo',
            'complemento_observacao'  => 'ao lado do bobs',
            'CEP'                     => '23548-013',
        ]);

        Pedido::create([
            
            'nome'                    => 'Gabriel' ,
            'telefone'                => '21996587415',
            'observacao'              => 'Sem observação',
            'status'                  => '4',
            'rua'                     => 'Rua da Assembleia.',
            'numero'                  => '712',
            'bairro'                  => 'flamengo',
            'complemento_observacao'  => 'esquina do parque',
            'CEP'                     => '23555-306',
        ]);
    }
}
