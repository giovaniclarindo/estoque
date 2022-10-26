@extends('adminlte::page')

@section('title', 'Gardenia - Pedidos negados')

@section('content_header')
    <h1 style="text-align: center;">Cancelados</h1>
@stop

@section('content')
<script>
    function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
</script>

<div class="container col-8">


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











@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
