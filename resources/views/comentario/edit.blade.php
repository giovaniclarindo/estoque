@extends('adminlte::page')

@section('title', 'Gardenia - Editar comentários')

@section('content_header')
    <h1 style="text-align: center">Comentários</h1>
@stop

@section('content')
<div class="container col-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::model($comentario,array('route' => array('comentario.update', $comentario->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome do Cliente') }}
    {{ Form::text('nome', $comentario->nome , ['class' => 'form-control'] )}}
    
    {{ Form::label('comentario', 'Digite um comentarios') }}
    {{ Form::text('comentario', $comentario->comentario , ['class' => 'form-control'] )}}
    
   
   
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mb-2 mt-2 ']) }}
    <a class="btn btn-primary " href="{{URL::to('comentario/')}}">Voltar</a>
    {{ Form::close()  }}
   
 

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
