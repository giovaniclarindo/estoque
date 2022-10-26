<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arquivo;

use App\Models\Produto;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

class ArquivoController extends Controller
{ 
    public function create($id){
    
        $produto_id = $id; 
        $produto = Produto::where('id', $produto_id)->first();
        //dd ($produto->arquivos);
        $arquivos = Arquivo::where('produto_id', $produto_id)->get();
        return view('arquivo.arquivocreate', ['produto' => $produto, 'arquivos' => $arquivos]);
    }

    public function store(Request $request){
        
        //dd ($request->all()) MOSTRA TODAS O CONTEÚDO REQUISIÇÕES;
        
        $arquivo_name = $request->arquivo->store('public/imagens');
        $arquivo = $request->file('arquivo');

        $arquivo_original_name      = $arquivo->getClientOriginalName();
        $arquivo_original_extension = $arquivo->getClientOriginalExtension();
        $arquivo_real_path          = $arquivo->getRealPath();
        $arquivo_size               = $arquivo->getSize();
        $arquivo_mimetype           = $arquivo->getMimeType();
        
        
        $arquivo = new Arquivo;
        $arquivo->produto_id                    = $request->produto_id;
        $arquivo->arquivo_name                  = str_replace("public/", "", $arquivo_name);
        $arquivo->arquivo_original_name         = $arquivo_original_name;
        $arquivo->arquivo_original_extension    = $arquivo_original_extension;
        $arquivo->arquivo_real_path             = $arquivo_real_path;
        $arquivo->arquivo_size                  = $arquivo_size;
        $arquivo->arquivo_mimetype              = $arquivo_mimetype;
        $arquivo->save();

        $produto_id = $arquivo->produto->id;

        return redirect()->route('arquivo.create',  ['id' => $produto_id])->with('message', 'Arquivo excluido com sucesso!');

    }

    public function destroy($id)
    {   
        

        $arquivo = Arquivo::findOrFail($id);
        Storage::delete($arquivo->arquivo_name);
        $produto_id = $arquivo->produto->id;

        $arquivo->delete();

        return redirect()->route('arquivo.create',  ['id' => $produto_id])->with('message', 'Arquivo excluido com sucesso!');

    }

}
