@extends('adminlte::page')

@section('title', 'Marmitaria - Dashboard')

@section('content_header')
   
<h1 style="text-align: center;">Bem-Vindo {{ $user->name }}</h1>
@stop

@section('content')

<div class="container col-10"> 


    <div class="row">
   
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$numeroDePedidos}}</h3>

            <p>Novos Pedidos</p>
          </div>
          <div class="icon">
            <i class="fas fa-concierge-bell"></i>
          </div>
          
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$pedidoDoMes}}</h3>

            <p>Pedidos concluidos</p>
          </div>
          <div class="icon">
            <i class="fas fa-check-circle"></i>
          </div>
          
        </div>
      </div>
      
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$pedidoNegados}}</h3>

            <p>Pedidos negados</p>
          </div>
          <div class="icon">
            <i class="far fa-thumbs-down"></i>
          </div>
          
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$numeroDeProdutos}}</h3>
           
            <p>Produtos cadastrados</p>
          </div>
          <div class="icon">
            <i class="fas fa-shopping-bag"></i>
          </div>
        </div>
      </div>
    
    </div>

    

      {{-- <div class="card-footer bg-dark mb-3">
        <div class="row">
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
              <h5 class="description-header">$35,210.43</h5>
              <span class="description-text">TOTAL REVENUE</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
              <h5 class="description-header">$10,390.90</h5>
              <span class="description-text">TOTAL COST</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-6">
            <div class="description-block border-right">
              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
              <h5 class="description-header">$24,813.53</h5>
              <span class="description-text">TOTAL PROFIT</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-3 col-6">
            <div class="description-block">
              <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
              <h5 class="description-header">1200</h5>
              <span class="description-text">GOAL COMPLETIONS</span>
            </div>
            <!-- /.description-block -->
          </div>
        </div>
        <!-- /.row -->
      </div> --}}

     

        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Produtos mais vendidos</h3>
            <div class="card-tools">
             
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
              <tr>
                <th>Poduto</th>
                <th>Preço</th>
                <th>Vendas</th>
                
              </tr>
              </thead>
              <tbody>
                @foreach ( $vendidos as $value)
                  
               
              <tr>
                <td>
                
                  {{$value->nome}}
                </td>
                <td>R$ {{$value->valor}} BRL</td>
                <td>
                  
                  {{$value->produtos_pedidos}} vendidos
                </td>
              
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>


</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop