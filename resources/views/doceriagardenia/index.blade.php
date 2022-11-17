@extends('components.layout')

@section('title','Doceria Gardenia')

@section('inicio', 'Bem vindo')

@section('content')
    <!-- Começo do header -->
 
@if (Session::has('message'))
<div class="alert alert-info text-center">{{ Session::get('message') }}</div>
@endif
<div id="mensagem" class="alert alert-success top-0 start-50 translate-middle-x toasts-top-right fixed " style="display: none" >
  
</div>
    <section class="frist-cont">
      <section class="container">
          <!--<div class="conteudo1">
              <h2>A vida é curta! <br> Coma a sobremosa primeiro</h2>
              <hr/>
              <p>Seja Bem-vindo ao site da Doceria Gardêmia. Aqui você 
                  encontrará diversos de nossos deliciosos produtos e um 
                  pouco mais sobre nós.</p>
          </div>-->
          <div class="conteudo2">
              <form action="">
                 <a href="#conhecer"><button type="button" >conhecer</button></a>
                  <br>
                  <img src="{{ asset('/site/src/img/vector-setaBpttom.png')}}" alt="icon">
              </form>
          </div>
      </section>
  </section>
  <br>
  <!-- Final do primeiro container -->


<!-- Começo do carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('/site/src/img/1.png')}}" class="d-block w-100" alt="banner de promoção">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/site/src/img/2.png')}}" class="d-block w-100" alt="Banner com produto">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/site/src/img/3.png')}}" class="d-block w-100" alt="Banner com produto">
        </div>
      </div>
      <button id="conhecer" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <!-- Final do carousel -->


<!-- Começo da Lista de produtos -->
    <section class="third-cont">
        <section class="third-contp2">
          <h2>Produtos</h2>
          <article class="container">
           
            @foreach ( $produtos as $key => $produto ) 
                <div class="card-body">
                  {{ Form::open(array('class' => 'addProduto' )) }}  
                  {{ Form::hidden('produto_id', $produto->id) }}
                  {{ Form::hidden('nome', $produto->nome, array('id' => 'nome' )) }}
                  {{ Form::hidden('valor', $produto->valor) }}  
                  @isset($produto->arquivos->first()->arquivo_name)
                  <img class="fotoProduto"
                  src="{{ asset("storage/{$produto->arquivos->first()->arquivo_name}") }}"
                    alt=""
                  />
                  @endisset
                  <div class="card-inf">
                    <h5>{{$produto->nome}}</h5>
                    <p> {{$produto->descricao}}</p>
                  </div>
                  <div class="card-footer">
                    <p>
                      <span id="price">R${{$produto->valor}}</span>
                    </p>
                    <div class="quantity">
                      
                      {{ Form::number('quantidade', 1, array( 'min' => '1' )) }}
                  
                      <button class="carrinho" type="submit">
                      <img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" />
                  </button>
                    </div>
                  </div>
                  {{ Form::close() }}
                </div>  
                  @endforeach

          </article>
          <a href="{{URL::to ('/produtos')}}">mais produtos</a>
      </section>
    </section>
    <br>
    <!-- Começo da Lista de produtos -->

<!-- Começo do Espaço sobre a doceria -->
    <section class="fourth-cont">
      <article class="container">
      
        <img src="{{ asset('/site/src/img/cozinheira.png')}}" alt="Cozinheira">
      
      <div class="cont-right">
        <h2>Sobre nós</h2>
        <h3>Seja Bem-Vindo</h3>
        <p>A Doceria Gardênia é uma micro-empresa que foi criada em outubro de 
          2019 com a participação importante de seus amigos e 
          parentes ao incentivar a produção e início de um <b style="color: #0a3d24; font-weight: bold;">próprio negócio.</b></p>
        <button type="button"> <a href="{{URL::to ('/quemsomos')}}">conhecer</a></button>
      </div>
    </article>
    </section>

<!-- Final do Espaço sobre a doceria -->
<!--Começo do Espaço para por os comentários -->
<section class="slides"> 
  @foreach ($comentarios as $key => $comentario )
    
 
  <div class="body mySlides">
      <div class="sub-body">
      <div class="cliente">
          <img src="{{ asset('/site/src/img/Rosquinha.jpg')}}" alt="fotodocliente" >
          <ul>
              <li class="nomeCliente">{{$comentario->nome}}</li>
              <li class="tipoCliente">cliente</li>
          </ul>
      </div>
      <div class="icons">
          <ul>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>
            </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
              </li>

              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </li>
          </ul>
      </div>
  </div>
      <div>
          <p>{{$comentario->comentario}}</p>
      </div>
  </div>
  @endforeach
  
<div class="botoes">
<button class="w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

</section>

  @section('scriptSlide')
  <script>  
   /*Slideshow dos comentários*/
   var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }

    /*Botão contador dentro dos cards*/
    let addBtn = document.querySelector('#add');
                  let subBtn = document.querySelector('#sub');
                  let qty = document.querySelector('#qtyBox');
            
                  addBtn.addEventListener('click', ()=>{
                    qty.value = parseInt(qty.value) + 1;
                  });
            
                  subBtn.addEventListener('click',()=>{
                    if (qty.value <= 0) {
                      qty.value = 0;
                    }
                    else{
                      qty.value = parseInt(qty.value) -1;
                    }
                  });
                  
  </script>
 @endsection
 
 @endsection

 
@section('script')

<script>

$(function()
      {
       $('form[class="addProduto"]').submit(function(event)
       {
        event.preventDefault();
        setTimeout(function() {
   $('#mensagem').fadeOut(1000);
}, 2000);

      $.ajax({
        type: "post",
        url: "{{ route('doceriagardenia.addProduto') }}",
        data: $(this).serialize(),
        dataType: "json",
        success: function (response) {
         
          $( "#mensagem" ).empty();
          $('#mensagem').show();
          $('#mensagem').append(response.message);


        }
      });

       });



      });
</script>


@endsection
 

 
 