@extends('adminlte::page')

@section('title', 'Marmitaria - Detalhes do pedido')

@section('content_header')
    <h1 style="text-align: center;">Pedido {{$pedido->id}}</h1>
@stop

@section('content')
<script>
    function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
</script>


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="container col-8">
 

    <div class="container col-8">
        <p class="bg-dark">Data do pedido        : {{ Carbon\Carbon::parse($pedido->created_at)->format('d/m  H:i' ) }}</p> 
        <p>Nome                                  : {{$pedido->nome}}</p> 
        <p>Telefone                              : {{$pedido->telefone}}</p>
        <p>Observacao                            : {{$pedido->observacao}}</p> 
        <p>Rua                                   : {{$pedido->rua}}</p>
        <p>status                                : {{$pedido->status}}</p>
        <p>Numero                                : {{$pedido->numero}}</p> 
        <p>Complemento                           : {{$pedido->complemento_observacao}}</p>
        @foreach ($pedido->produto as $value )
                 <li  class="list-group-item">{{$value->nome}}</li> 
                 @endforeach

                 @if ($pedido->status == 2)
                    <a class="btn btn-success mt-2" href="{{ URL::to('pedido/' . $pedido->id . '/statusConcluido') }}">Concluir pedido</a>
                @elseif ($pedido->status == 1)
                <a class="btn btn-success mt-2" href="{{ URL::to('pedido/' . $pedido->id . '/statusAndamento') }}">Aceitar</a> 
                <a class="btn btn-danger mt-2"  href="{{ URL::to('pedido/' . $pedido->id . '/statusCancelado') }}">Rejeira pedido</a>

                @else
                   
                @endif
                <a class="btn btn-primary mt-2" href="{{URL::to('pedido')}}">Voltar</a>
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
