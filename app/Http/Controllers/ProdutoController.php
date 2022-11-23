<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listar todos os produtos
        //$produtos = Produto::orderBy('categoria_id', 'ASC')->get();
        $produtos = Produto::orderBy('categoria_id', 'ASC')->paginate(10);
        return view('produto.index', ['produtos' => $produtos]);
    }


    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        return view('produto.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'valor.required' => 'O campo valor é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
            'promocao.required' => 'O campo promoção é requirido',
        ];

        $validateData = $request->validate([
            'nome'          => 'required|min:5',
            'descricao'     => 'required',
            'valor'         => 'required',
            'categoria_id'  => 'required',
            'promocao'      => 'required',
        ], $message);


        $produto = new Produto;
        $produto->nome          = $request->nome;
        $produto->descricao     = $request->descricao;
        $produto->valor         = $request->valor;
        $produto->categoria_id  = $request->categoria_id;
        $produto->quantidade    = 0;
        $produto->promocao      = $request->promocao;
        
        $produto->save();

        return redirect()->route('produto.index')->with('message', "Produto {$produto->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        
        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::pluck('nome', 'id');
        return view('produto.edit', ['produto' => $produto, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'valor.required' => 'O campo valor é obrigatório!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'categoria_id.required' => 'O campo categoria é obrigatório!',
        ];

        $validateData = $request->validate([
            'nome'          => 'required|min:7',
            'valor'         => 'required',
            'descricao'     => 'required',
            'categoria_id'  => 'required',
        ], $message);

        $produto = Produto::findOrFail($id);
        $produto->nome          =$request->nome;
        $produto->valor         = $request->valor;
        $produto->descricao     = $request->descricao;
        $produto->categoria_id  = $request->categoria_id;

        $produto->save();
       
        return redirect()->route('produto.index')->with('message','Produto Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produto.index')->with('message', 'Produto excluido com sucesso!');
    }
}
