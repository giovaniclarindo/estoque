@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Arquivos Do Produto: {{ $produto->nome }}</title>
</head>
<body>
    
    <h1 style="text-align: center">Arquivos Do Produto: {{ $produto->nome }}</h1>
    
    <div class="container col-8">
        <br>
            {{ Form::open(array('url' => 'arquivocreate', 'files' => 'true')) }}
                    
                    <label  for="">Envie a sua img aqui:</label>
                    <input  type="file" name="arquivo" id="arquivo">
                    <input  type="hidden" name="produto_id" value="{{ $produto->id }}">
                    <button class="btn btn-success" type="submit">enviar</button>    

            {{ Form::close() }}
            <br>
            
                    Listagem de arquivos:
                    
                    <!-- ESPAÇO -->
                
                    <div class="box-body"><fieldset>
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Imagem</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($produto->arquivos as $value)
                        {{-- $value->arquivo_name --}}   
                        <!--<img src="{{-- url("storage/{$value->arquivo_name}") --}}" alt="{{-- $value->arquivo_name --}}">-->
                        <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->arquivo_original_name }}</td>
                        <td><img src="{{ asset("storage/{$value->arquivo_name}") }}"  id="" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal"></td>
                        <td>
                            {{ Form::open(array('url' => 'arquivocreate/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        </fieldset><!-- /.table-responsive -->
                    </div>
                    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
    </div>
</body>
</html>
@endsection