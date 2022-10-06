@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align: center">Usuários</h1>
@stop

@section('content')


    <div class="container col-8">
        <a class="btn btn-lg btn-success mb-2" href="{{ URL::to('user/create') }}">Novo Usuário
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
        </a>
            <table class="table  no-margin">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>CPF</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Ações</td>
                </tr>
            </thead>      
            <tbody>
                    <tr>
                        @foreach ($users as $key => $value )
                        <tr>
                            <td> {{$value->id}}</td>
                            <td> {{$value->email}}</td>
                            <td> {{$value->cpf}}</td>
                            <td> {{$value->name}}</td>
                            <td> {{$value->telefone}}</td>
                            
                            <td><a class="btn btn-primary" href="{{ URL::to('user/' . $value->id) }}">visualizar</a></td>
                            <td><a class="btn btn-warning" href="{{ URL::to('user/' . $value->id . '/edit') }}">editar</a></td>
                        <!-- <a class="btn btn-danger" href="#"> deletar</a> -->
                        <td>
                        {{ Form::open(array('url' => 'user/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
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