@extends('adminlte::master')


@extends('components.layout')

@section('title','Doceria Gardenia - checkout')

@section('inicio','Opa, Estamos Quase Lá!')

@php($totaGeral=0)
@php($quantidadeTotal=0)

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <h5 class="text-center"> confira seus futuros produtos</h5>
<div class="card-body container-lg">
<div class="row">

  <div class="col-12 col-md-6 ">
    <div class="card" style="background-color:#FF9900" >
      <div class="card-body">
        {{ Form::open(array('url' => '/concluirPedido')) }}
      
          <div  class="form-group">
            {{ Form::label('nome', 'Digite seu nome:') }}
            {{ Form::text('nome', null , ['class' => 'form-control', 'id'=> 'nome', 'placeholder' => 'Ex: Leandro Correia'] ) }}
          </div>
            <div  class="form-group">
              {{ Form::label('CEP', 'CEP:') }}
              {{ Form::text('CEP', null , ['class' => 'form-control', 'id'=> 'CEP'] ) }}
            </div>
            <div  class="form-group">
              {{ Form::label('rua', 'Rua:') }}
              {{ Form::text('rua', null , ['class' => 'form-control', 'id'=> 'rua', 'readonly' => true , 'placeholder' => 'Ex: Rua do alfaiate'] ) }}
              
            </div>
            <div class="form-group">
               {{ Form::label('bairro', 'Bairro') }}
               {{ Form::text('bairro', null , ['class' => 'form-control', 'id'=> 'bairro', 'readonly' => true , 'placeholder' => 'Ex: Barra da Tijuca'] ) }}
            </div>
            <div class="form-group">
              {{ Form::label('Numero', 'Número:') }}
              {{ Form::text('numero', null , ['class' => 'form-control', 'id'=> 'numero' , 'placeholder' => 'Ex: 07'] ) }}
            </div>
            <div class="form-group">
              {{ Form::label('complemento_observacao', 'Complemento:') }}
              {{ Form::text('complemento_observacao', null , ['class' => 'form-control', 'id'=> 'complemento_observacao' , 'placeholder' => 'Ex: Ao lado da sorveteria Kiboom'] ) }}
            </div>
            <div class="form-group">
              {{ Form::label('telefone', 'Telefone:') }}
              {{ Form::text('telefone', null , ['class' => 'form-control', 'id'=> 'telefone' , 'placeholder' => 'Ex: (21)97634-0934'] ) }}
           </div>
           <div class="form-group">
            {{ Form::label('email', 'E-mail:') }}
            {{ Form::text('email', null , ['class' => 'form-control', 'id'=> 'email' , 'placeholder' => 'Ex: giovani.giovani@gmail.com'] ) }}
         </div>
    

          <div class="form-group">
            {{ Form::label('observacao', 'Digite uma observação:') }}
            {{ Form::textarea('observacao', null , ['class' => 'form-control', 'id'=> 'observacao', 'style' =>'height: 100px', 'placeholder' => 'Ex: Pouco chocolate'] ) }}
           
            
          </div>
        
     
            <a href="{{URL::to ('/carrinho')}}" class="btn  btn-secondary mt-3 ">Voltar</a>
            {{ Form::submit('Enviar' , ['class' => 'btn btn-success mt-3 float-right']) }}
            {{ Form::close()  }}
          
         
      </div>
    </div>
</div>
<div class="col-12 col-md-6">
  <div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title  text-black">Meus Produtos</h3>
      <p class="card-text text-secondary">Confira seus produtos antes de finalizar sua encomenda.</p>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
            
          </tr>
          </thead>
          @foreach ($cart as $key => $value)

          @foreach ($value as $key2 => $value2)
          <tbody>
            <tr>
              <td><a href="pages/examples/invoice.html">{{ $value2['nome'] }}</a></td>
              <td>{{ $value2['quantidade'] }}</td>

              
              <td>R$ {{ $value2['quantidade'] * $value2['valor'] }}</td> 
            </tr>
          </tbody>
          @php($totaGeral += $value2['quantidade'] * $value2['valor'])
          @php($quantidadeTotal += $value2['quantidade'])
          @endforeach 
                              
          @endforeach 
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix ">
      <p class="text-black float-right mt-2 "> Total: <span class="text-secondary ">({{$quantidadeTotal}} items)</span> <span class="text-black  mt-2">R$ {{ $totaGeral }}</span></p>
    </div>
  </div>

   
    <!-- /.card-footer -->
  
</div>

</div>
</div>



 @endsection

