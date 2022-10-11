@extends('adminlte::page')

@section('title', 'Mudar senha')

@section('content_header')
<h1>Mudar senha</h1>
<!--
<ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Mudar senha</a></li>
</ol>
-->

@stop
@section('content')
    <!--<p>You are logged in!</p>-->


<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Editar - {{ $user->name }}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <!--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>-->
            </div>
        </div>
        <div class="box-body">
            <!-- if there are creation errors, they will show here -->
            <!--{{ Html::ul($errors->all()) }} -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{ Form::model($user, array('route' => array('self_update_password'), 'method' => 'PUT')) }}

            <div class="form-group">
                
                {{ Form::label('password_old', 'Senha Antiga') }}
                {{ Form::password('password_old', array('class' => 'form-control')) }}

                {{ Form::label('password_new', 'Senha Nova') }}
                {{ Form::password('password_new', array('class' => 'form-control')) }}

            </div>

            {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <!--Footer-->
        </div>
        <!-- /.box-footer-->
    </div>


</div>




</div>




@stop