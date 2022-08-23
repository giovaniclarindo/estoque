<!-- resources/views/produto.index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>Produto - Create</p>
@endsection
 
@section('content')
    <p>Formulário</p>

    {!! Form::open(['url' => 'produto/create']) !!}

    {{ Form::label('nome', 'Nome:') }}<br>
    {{ Form::text('nome') }}<br>

    {{ Form::label('quantidade', 'Quantidade:') }}<br>
    {{ Form::text('quantidade') }}<br>

    {{ Form::label('valor', 'Valor:') }}<br>
    {{ Form::text('valor') }}<br>

    {{ Form::submit('Enviar') }}

    {!! Form::close() !!}

@endsection