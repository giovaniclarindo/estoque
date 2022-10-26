@extends('adminlte::page')

@section('title', 'Gardenia - Criar comentário')

@section('content_header')
    <h1>Dashboard</h1>
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

    {{ Form::open(array('url' => '/comentario/create')) }}

    {{ Form::label('nome', 'Nome da comentario') }}
    {{ Form::text('nome', null , ['class' => 'form-control'] )}}

    {{ Form::label('comentario', 'Digite o comentario') }}
    {{ Form::text('comentario', null , ['class' => 'form-control'] )}}
    
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
