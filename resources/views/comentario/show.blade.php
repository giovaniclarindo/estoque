@extends('adminlte::page')

@section('title', 'Gardenia - Detalhes do comentário')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container col-8">
	<p>ID:                  {{ $comentario->id }}</p>
    <p>Nome:                {{ $comentario->nome }}</p>
    <p>Comentario:          {{ $comentario->comentario }}</p>
   
    <p>Criação:             {{ Carbon\Carbon::parse($comentario->created_at)->format('d/m/Y H:i') }}</p>
    <p>Última modificação:  {{ Carbon\Carbon::parse($comentario->updated_at)->format('d/m/Y H:i') }}</p>
   
    <a class="btn btn-primary btn-lg" href="{{URL::to('comentario/')}}">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
