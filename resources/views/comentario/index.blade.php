@extends('adminlte::page')

@section('title', 'Gardenia - Comentários')

@section('content_header')
    <h1 style="text-align:center">Comentarios dos clientes</h1>
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
    <a class="btn btn-success btn-lg mb-3" href="{{URL::to ('comentario/create')}}">Adicionar Comentários
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
    </a>
 <table class="table  no-margin">
    <thead class="thead-dark">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Comentario</td>
            
            <td>ações</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </thead>      
    <tbody>
            <tr>
                @foreach ($comentarios as $key => $value )


                
                <tr>
                    <td> {{$value->id}}</td>
                    <td> {{$value->nome}}</td>
                    <td> {{$value->comentario}}</td>
            
                    <td>
                        <a class="btn btn-primary" href="{{ URL::to('comentario/' . $value->id) }}">Visualizar</a>
                    </td>

                    <td> 
                        <a class="btn btn-warning" href="{{ URL::to('comentario/' . $value->id . '/edit') }}"> editar</a>
                    </td>
                    
                    <td>
                        {{ Form::open(array('url' => 'comentario/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
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
