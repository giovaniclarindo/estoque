
@extends('adminlte::page')

@section('title', 'Gardenia - Detalhes do produto')

@section('content_header')
    <h1 style="text-align: center">Produtos</h1>
@stop

@section('content')


<div class="container col-8">
	<p>ID:                  {{ $produto->id }}</p>
    <p>Nome:                {{ $produto->nome }}</p>
    <p>Descrição:           {{ $produto->descricao }}</p>
    <p>Promoção:            
            @if ($produto->promocao === 1)
                Produto em promoção!
            @else
                Produto fora de promoção!
            @endif
    </p>
	<p>Valor:               {{ $produto->valor}}</p>
    <p>Categoria:           {{ $produto->categoria->nome }}</p>
    <p>Criação:             {{ Carbon\Carbon::parse($produto->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($produto->updated_at)->format('d/m/Y H:i') }}</p>

    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


