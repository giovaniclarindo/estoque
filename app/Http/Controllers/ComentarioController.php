<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listar todas os comentarios
        $comentarios = Comentario::orderBy('nome', 'ASC')->get();
        return view('comentario.index', ['comentarios' => $comentarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentario.create');
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
            'comentario.required' => 'O campo descrição é obrigatório!',
            'comentario.min' => 'O campo comentario precisa ter no mínimo :min caracteres!',
            'comentario.max' => 'O campo comentario precisa ter no maximo :max caracteres!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:3',
            'comentario'=>'required|min:2|max:170',
                       
        ], $message);


        $comentario = new Comentario;
        $comentario->nome      = $request->nome;
        $comentario->comentario      = $request->comentario;
        
        
        $comentario->save();

        return redirect()->route('comentario.index')->with('message', "Comentario de {$comentario->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $comentario = Comentario::findOrFail($id);
        
        return view('comentario.show', ['comentario' => $comentario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $comentario = Comentario::findOrFail($id);

        return view('comentario.edit', ['comentario' => $comentario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $message = [
            'nome.required' => 'O campo nome é obrigatório!',
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'comentario.required' => 'O campo descrição é obrigatório!',
            'comentario.min' => 'O campo comentario precisa ter no mínimo :min caracteres!',
            'comentario.max' => 'O campo comentario precisa ter no maximo :max caracteres!',
        ];

        $validateData = $request->validate([
            'nome'      => 'required|min:3',
            'comentario'=>'required|min:2|max:170',
                       
        ], $message);

        $comentario = Comentario::findOrFail($id);
        $comentario->nome            =$request->nome;
        $comentario->comentario      = $request->comentario;
        
        

        $comentario->save();
       
        return redirect()->route('comentario.index')->with('message',"Comentario de {$comentario->nome} Editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return redirect()->route('comentario.index')->with('message', "Comentario de {$comentario->nome} excluido com sucesso!");
    
    }
}
