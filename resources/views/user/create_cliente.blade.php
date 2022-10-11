@extends('layouts.app')
{{-- @extends('adminlte::page') --}}

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align: center">Usuarios</h1>
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

            {{ Form::open(array('url' => '/create_cliente')) }}
            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nome:') }}
                    {{ Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Ex: Giovani'] )}}
                </div>
                <div class="col-6">
                    {{ Form::label('cpf', 'CPF:') }}
                    {{ Form::text('cpf', null , ['class' => 'form-control', 'placeholder' => 'Ex: 123.456.789-01'] )}}
                </div>
                <div class="col-6">
                    {{ Form::label('email', 'E-mail:') }}
                    {{ Form::text('email', null , ['class' => 'form-control', 'placeholder' => 'Ex: giovani@gmail.com'] ) }}
                </div>
                <div class="col-6">
                    {{ Form::label('telefone', 'Telefone:') }}
                    {{ Form::text('telefone', null , ['class' => 'form-control', 'placeholder' => 'Ex: (21) 99999-9999'] )}}
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'Senha:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite uma senha forte']) }}
                </div>
                <div class="col-6">
                    {{ Form::label('password', 'Confirmar senha:') }}
                    {{ Form::password('confirm-password', array('class' => 'form-control ', 'placeholder' => 'Digite novamente')) }}
                </div>
            </div>
            
            {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-3']) }}

        
        
            {{ Form::close()  }}



        </div>

        




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop