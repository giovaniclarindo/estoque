@extends('adminlte::page')

@section('title', 'Marmitaria - Novos pedidos')

@section('content_header')
    <h1 style="text-align: center;">Novos pedidos</h1>
@stop

@section('content')



@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container col-8"> 
    <div class="callout callout-info">
@if ($numeroDePedidos > 0)
    <P>NOVOS PEDIDOS</P >
@else
    <P >AGUARDE POR NOVOS PEDIDOS</P > 
@endif
</div>
    <table class="table  no-margin">
        <thead>
            <tr> 
                <td>Nome</td>
                <td>Telefone</td>
                <td>detalhes do pedido</td> 
            </tr>
        </thead>
        <tbody>
                <tr>
                    @foreach ($pedido as $value) 
                        <td>    {{$value->nome}}</td> 
                        <td>    {{$value->telefone}}</td>
                        <td><a class="btn btn-primary" href="{{ URL::to('pedido/' . $value->id) }}">Detalhar</a></td>
                </tr>
                    @endforeach
                </tr>
        </tbody>
     </table>
 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
