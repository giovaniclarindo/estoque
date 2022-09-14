<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $produtos = Produto::orderBy('nome', 'ASC')->get();
        return view('produto.produto_index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nome', 'id');
        return view('produto.produto_create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $messages = [
         'nome.required'  => 'O campo :attribute é obrigatorio!',
         'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
         'quantidade.required'     => 'o :attribute é obrigatório!',
         'quantidade.integer'     => 'o :attribute é obrigatória!',
         'categoria_id.required'     => 'o campo categoria é obrigatório!'
      ];


      $validated = $request->validate([
        'nome'              => 'required|min:4',
        'quantidade'        => 'required|integer',
        'valor'             => 'required',
        'categoria_id'      => 'required',
      ], $messages);


      $produto = new Produto;
      $produto->nome            = $request->nome;
      $produto->quantidade      = $request->quantidade;
      $produto->valor           = $request->valor;
      $produto->categoria_id    = $request->categoria_id;
      $produto->save();

      return redirect('/produto')->with('status', 'Produto criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('ENTROU NO SHOW');
        $produto = Produto::find($id);
        //dd($produto);
        return view('produto.produto_show', ['produto' => $produto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categorias = Categoria::pluck('nome', 'id');
      $produto = Produto::find($id);
       return view('produto.produto_edit', ['produto' => $produto, 'categorias' => $categorias]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $messages = [
        'nome.required'  => 'O campo :attribute é obrigatorio!',
        'nome.min'       => 'O :attribute precisa ter no mínimo :min.',
        'quantidade.required'     => 'o :attribute é obrigatório!',
        'quantidade.integer'     => 'o :attribute é obrigatória!',
        'categoria_id.required'     => 'o campo categoria é obrigatório!'
     ];


     $validated = $request->validate([
       'nome'              => 'required|min:4',
       'quantidade'        => 'required|integer',
       'valor'             => 'required',
       'categoria_id'      => 'required',
     ], $messages);

      $produto = Produto::find($id);
      $produto->nome            = $request->nome;
      $produto->quantidade      = $request->quantidade;
      $produto->valor           = $request->valor;
      $produto->categoria_id    = $request->categoria_id;
      $produto->save();

      return redirect('/produto')->with('status', 'Produto atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/produto')->with('status', 'Produto excluido com sucesso!');

    }
}
