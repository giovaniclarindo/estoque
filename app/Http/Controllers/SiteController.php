<?php

namespace App\Http\Controllers;

use App\Models\Site;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\PedidoProduto;
use App\Models\Pedido;
use App\Models\Comentario;
use App\Models\Arquivo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::limit(3)->orderBy('nome', 'ASC')->get();
        $comentarios = Comentario::orderBy('nome', 'ASC')->get(); 
        $arquivos = Arquivo::get();
        return view('marmitaria.index', ['produtos' => $produtos , 'comentarios' =>$comentarios, ]);
    }

    /**
     * Exibe a Páina de contao.
     *
     * @return \Illuminate\Http\Response
     */
    public function contato()
    {
        return view('marmitaria.contato');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduto(Request $request)
    {
         //echo gettype($cart), "\n";

         $collection = collect([
            [
            'id' => $request->produto_id, 
            'nome' => $request->nome, 
            'quantidade' => $request->quantidade, 
            'valor' => $request->valor
        ]]);

        //1 verifica se existe carrinho se não existe cria
        $cart = (array) $request->session()->get('cart');

        if(!$cart) { // se nao existe cria e insere primeiro registro
            $request->session()->put('cart');
            $request->session()->push('cart', $collection);
        }else{ //se existe acrescenta novo registro

        // 2 verifica se o item já existe no carrinho e se existir atualiza

            $cart = (array) $request->session()->get('cart');

            foreach ($cart as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    if($value2['id'] == $request->produto_id){
                        //echo('igual');
                        unset($cart[$key]);
                        $request->session()->forget('cart');
                        $request->session()->put('cart', $cart);
                    }
                }
            }

            //4 recoloca no carrinho com nova quantidade
            $request->session()->push('cart', $collection);

            $cart = (array) $request->session()->get('cart');
            //print_r($cart[0][0]['nome']);

            //print_r($cart);

        }
            $produto['succes'] = false;
            $produto['message'] = $request->quantidade.  ' Produto Adicionado ao Carrinho';    
            echo json_encode($produto);
      //return redirect()->back();
      //return redirect()->back()->with('message', '');  
    }


    public function carrinho(Request $request){

        $cart = (array) $request->session()->get('cart');
        return view('marmitaria.carrinho', ['cart' => $cart]);
        /*
        foreach ($cart as $key => $value) {
            //echo($value[$key]['nome']);
            //echo $key . ' - ' . gettype($value), "\n";
            foreach ($value as $key2 => $value2) {
                //echo gettype($value2), "\n";
                echo($value2['id'] . ' - ' . $value2['nome'] . ' - ' . $value2['quantidade'] . ' - ' . $value2['valor']);
                //echo($value[$key]->nome);
                echo('<br>');
            }
        }
        */

    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        
        $cart = (array) $request->session()->get('cart');
        return view('marmitaria.checkout', ['cart' => $cart]);
        
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function concluirPedido(Request $request)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'CEP.required' => 'O campo CEP é obrigatório!',
            'rua.required' => 'O campo rua é obrigatório!',
            'numero.required' => 'O campo numero é obrigatório!',
            'telefone.required' => 'O campo telefone é obrigatório!',
            'observacao.required' => 'O campo observacao é obrigatório!',
            'bairro.required' => 'O campo bairro é obrigatório!',
            'complemento_observacao.required' => 'O campo complemento_observacao é obrigatório!',
        ];
        $validateData = $request->validate([
            'nome'                    => 'required|min:1',
            'CEP'                     => 'required|min:8',
            'rua'                     => 'required|min:1',
            'numero'                  => 'required|min:1',
            'telefone'                => 'required|min:1',
            'observacao'              => 'required|min:1',
            'bairro'                  => 'required|min:1',
            'complemento_observacao'  => 'required|min:1',
            
        ], $message);


        $pedido = new Pedido;
        $pedido->nome      = $request->nome;
        $pedido->status      = $request->status;
        $pedido->CEP      = $request->CEP;
        $pedido->rua      = $request->rua;
        $pedido->numero      = $request->numero;
        $pedido->telefone      = $request->telefone;
        $pedido->bairro      = $request->bairro;
        $pedido->observacao      = $request->observacao;
        $pedido->complemento_observacao      = $request->complemento_observacao;
        $pedido->status = 1;
       
        $pedido->save();

        $cart = (array) $request->session()->get('cart');

        foreach ($cart as $key => $value) {
            foreach ($value as $key2 => $value2) {
                
                echo($value2['id']);
                
                $produtoPedido = new PedidoProduto;
                $produtoPedido->pedido_id =  $pedido->id;
                $produtoPedido->produto_id = $value2['id'];//intval($value[$key]['id']);
                $produtoPedido->quantidade = $value2['quantidade'];
                $produtoPedido->valor = $value2['valor'];
               
                $produtoPedido->save();
            }
        }
        $request->session()->forget('cart');
        return redirect()->route('marmitaria.index')->with('message', "Seu pedido foi recebido e em breve entraremos em contato para confirmar a forma de pagamento ");


    }


    /* 
            'id' => $request->produto_id, 
            'nome' => $request->nome, 
            'quantidade' => $request->quantidade, 
            'valor' => $request->valor
             */
     /**
     * Exibe a Página para adicionar produto ao carrinho.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('marmitaria.show', ['produto' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function removeProduto(Request $request, $key){

        $cart = (array) $request->session()->get('cart');
        unset($cart[$key]);
        $request->session()->forget('cart');
        $request->session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Produto excluido com sucesso'); 

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quemsomos()
    {
        return view('marmitaria.quemsomos');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produtos()
    {
        $produtos = Produto::orderBy('nome', 'ASC')->get();
        $arquivos = Arquivo::get();
        return view('marmitaria.produtos', ['produtos' => $produtos  ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function promocao()
    {
        
        $produtos = Produto::where('promocao',1)->get();
        $arquivos = Arquivo::get();
        return view('marmitaria.promocao', ['produtos' => $produtos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
