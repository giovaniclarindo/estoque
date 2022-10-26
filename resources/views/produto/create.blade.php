@extends('adminlte::page')

@section('title', 'Gardenia - Criar produtos')

@section('content_header')
    <h1 style="text-align: center">Produtos</h1>
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

    {{ Form::open(array('url' => '/produto/create')) }}
    <div class="row">
        <div class="col-6">
            {{ Form::label('nome', 'Nome do produto:') }}
            {{ Form::text('nome', null , ['class' => 'form-control', 'placeholder' => 'Ex: Bolo de chocolate'] )}}
        </div>
        <div class="col-6">
            {{ Form::label('categoria', 'Categoria:' , ['class' => 'form-select ']) }} 
            {{ Form::select('categoria_id', $categorias,null, array('class' => 'form-control ')) }} 
        </div>
        <div class="col-12">
            {{ Form::label('descricao', 'Descrição:' , ['class' => ' '] ) }}
            {{ Form::text('descricao', null , ['class' => 'form-control', 'placeholder' => 'Ex: Feito com gotas de chocolate' ] ) }}
        </div>
        <div class="col-4">
            {{ Form::label('valor', 'Valor:') }}
            {{ Form::number('valor', null , ['class' => 'form-control ' ,'step'=> 'any', 'placeholder' => 'Ex: R$ 4,00'] ) }} 
        </div>
        <div class="col-4">
        {{ Form::label('promocao', 'Promoção:') }}
        {{ Form::select('promocao', ['1' => 'Sim', '0' => 'Não'],'0', array('class' => 'form-control') ) }}
        </div>
    </div>
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
    
    {{ Form::close()  }}


</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


