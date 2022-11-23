@extends('components.layout')

@section('title','Marmitaria - Carrinho')

@section('inicio','Carrinho de compras')

@section('content')



{{-- 
<section class="container-geral">
  <section class="container-inf-produto">
    <div class="lado-E">
      <h5>Produto</h5>
      <div class="card-body">
        <img
          src="https://blog.novasafra.com.br/wp-content/uploads/2019/01/264597-aprenda-como-fazer-chocotone-e-por-que-investir-nesse-produto.jpg"
          alt=""
          srcset=""
        />
        <div class="card-inf">
          <h5>Chocotone</h5>
          <p>O melhor chocotone feito com amor e gotas de chocolate</p>
        </div>
      </div>
    </div>
  
    <div class="lado-D">
      <ul class="subcont">
        <li class="primeiro-subcont">
          <h5>Quantidade</h5>
          <div class="quantity">
            <button id="sub">-</button>
            <input type="text" id="qtyBox" value="0" />
            <button id="add">+</button>
          </div>
          <div class="subcont-opc">
            <a href="#">excluir</a> <br />
            <a href="#">comprar agora</a>
          </div>
        </li>
        <li class="segundo-subcont">
          <h5>Preço</h5>
          <p>R$ 10,00</p>
        </li>
      </ul>
    </div> 
  </section>
  <div>
    
    <form class="finalizacao" action="post">
      <label class="subtotal" for="">Subtotal <small>(1 item)</small></label>
      <label class="valor" for="">R$ 6,00</label>
      <button > <a style="text-decoration: none; color: #fff;" href="{{URL::to ('/checkout')}}">Finalizar</a></button>
    </form>
  </div>
  </section> --}}

  @if (\Session::has('message'))
  <div class="alert alert-success">
      <ul>
          <li>{!! \Session::get('message') !!}</li>
      </ul>
  </div>
@endif

    <dl class="dl-horizontal" style="width: 80%; margin: 0 auto;">

      @if ($cart)

      <table class="table" style="width:100%;">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nome</th>
              <th scope="col">quantidade</th>
              <th scope="col">valor</th>
              <th scope="col">total</th>
              <th></th>
            </tr>
        </thead>

        @php($totaGeral=0)

          @foreach ($cart as $key => $value)

            @foreach ($value as $key2 => $value2)
                  <tr>
                    <td>{{ $value2['id'] }}</td>
                    <td>{{ $value2['nome'] }}</td>
                    <td>{{ $value2['quantidade'] }}</td>
                    <td>{{ $value2['valor'] }}</td>
                    <td>{{ $value2['quantidade'] * $value2['valor'] }}</td>
                    <td>
                      {{ Form::open(array('url' => 'removeProduto/' . $key)) }}
                      {{ Form::hidden('_method', 'DELETE') }}
                      {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                      {{ Form::close() }}</td>
                  </tr>
                  @php($totaGeral += $value2['quantidade'] * $value2['valor'])
            @endforeach 
                              
          @endforeach 
        </tr>
        </table> 
        <b>Total geral = R$
          {{ $totaGeral }} </b> <br>

     
        <a class="btn btn-lg btn-success mb-2" href="{{URL::to ('/checkout')}}">Realizar pedido</a>

       
      @else
        Carrinho vazio!
      @endif

    </dl>
 @endsection

