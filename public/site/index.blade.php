<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
    <title>Marmitaria</title>
</head>
<body>
    <!-- Começo do header -->
    <header id="header" class="header">
      <a id="logo" class="logo" href="index.html">
        <img id="logo" class="logo" src="{{ asset('/site/src/img/logo-gardênia.png')}}" alt="" />
      </a>
      <nav id="nav" class="nav">
        <button
          id="btn-mobile" class="btn-mobile"
          aria-label="Abrir menu"
          aria-haspopup="true"
          aria-controls="menu"
          aria-expanded="false"
        >
          <span id="hamburger" class="hamburguer"></span>
          <script src="script.js"></script>
        </button>
        <ul id="menu" class="menu" role="menu">
          <li><a href="index.blade.php">inicio</a></li>
          <li><a href="quemSomos.blade.php">quem somos</a></li>
          <li><a href="produtos.html">produtos</a></li>
          <li><a href="promocao.html">promoção</a></li>
          <li><a href="contato.html">contato</a></li>
          <li>
            <a href="carrinho.html"><img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" srcset="" /></a>
          </li>
        </ul>
      </nav>
    </header>
    <br>
    <!-- Final do header -->

<!-- Começo do primeiro container -->
    <section class="frist-cont">
        <section class="container">
            <div class="conteudo1">
                <h2>A vida é curta! <br> Coma a sobremosa primeiro</h2>
                <hr/>
                <p>Seja Bem-vindo ao site da Doceria Gardêmia. Aqui você 
                    encontrará diversos de nossos deliciosos produtos e um 
                    pouco mais sobre nós.</p>
            </div>
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
              <div class="card-body">
                <img
                  src="{{ asset('/site/src/img/chocotone.png')}}"
                  alt=""
                />
                <div class="card-inf">
                  <h5>Chocotone</h5>
                  <p>O melhor chocotone feito com amor e gotas de chocolate</p>
                </div>
                <div class="card-footer">
                  <p>
                    <span id="price">R$ 10,00</span>
                  </p>
                  <div class="quantity">
                    <button id="sub">-</button>
                    <input type="text" id="qtyBox" value="0" />
                    <button id="add">+</button>
                    <img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" />
                  </div>
                </div>
              </div>  

            </article>
            <a href="produtos.html">mais produtos</a>
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
            parentes ao incentivar a produção e início de um <b style="color: #533375; font-weight: bold;">próprio negócio.</b></p>
          <button type="button"> <a href="quemSomos.html">conhecer</a></button>
        </div>
      </article>
      </section>

      <!-- Final do Espaço sobre a doceria -->


<!--Começo do Espaço para por os comentários -->
      <section class="slides">
        <div class="body mySlides">
            <div class="sub-body">
            <div class="cliente">
                <img src="{{ asset('/site/src/img/leticia.png')}}" alt="fotodocliente" >
                <ul>
                    <li>Leticia</li>
                    <li>cliente</li>
                </ul>
            </div>
            <div class="icons">
                <ul>
                    <li><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt="icon"></li>
                    <li><img src="{{ asset('/site/src/img/icon-insta.png')}}" alt="icon"></li>
                    <li><img src="{{ asset('/site/src/img/icon-twt.png')}}" alt="icon"></li>
                </ul>
            </div>
        </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Suscipit adipisci commodi maiores officia est aliquam.</p>
            </div>
        </div>
        <div class="body mySlides">
            <div class="sub-body">
            <div class="cliente">
                <img src="{{ asset('/site/src/img/leticia.png')}}" alt="fotodocliente" >
                <ul>
                    <li>Rosa</li>
                    <li>Empresa</li>
                </ul>
            </div>
            <div class="icons">
                <ul>
                  <li><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt="icon"></li>
                  <li><img src="{{ asset('/site/src/img/icon-insta.png')}}" alt="icon"></li>
                  <li><img src="{{ asset('/site/src/img/icon-twt.png')}}" alt="icon"></li>
                </ul>
            </div>
        </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Suscipit adipisci commodi maiores officia</p>
            </div>
        </div>
        <div class="body mySlides">
            <div class="sub-body">
            <div class="cliente">
                <img src="{{ asset('/site/src/img/leticia.png')}}" alt="fotodocliente" >
                <ul>
                    <li>Felipe</li>
                    <li>Revendedor</li>
                </ul>
            </div>
            <div class="icons">
                <ul>
                  <li><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt="icon"></li>
                    <li><img src="{{ asset('/site/src/img/icon-insta.png')}}" alt="icon"></li>
                    <li><img src="{{ asset('/site/src/img/icon-twt.png')}}" alt="icon"></li>
                </ul>
            </div>
        </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Suscipit adipisci commodi maiores officia est aliquam. Lorem ipsum 
                    dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
      
    <div class="botoes">
      <button class="w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    
    </section>
    <!--Final do  Espaço para por os comentários -->
  
<!-- Começo do footer -->
    <footer>
        <section class="container">
        <div>
            <h3>sobre</h3>
            <p>A Doceria Gardênia é uma micro-empresa que foi criada em 
                outubro de 2019 com a participação importante de seus amigos 
                e parentes ao incentivar a produção e início de um próprio negócio. </p>
        </div>
        
        <div>
            <h3>redes sociais</h3>
                <div class="icons">
            <a href=""><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt=""></a>
            <a href=""><img src="{{ asset('/site/src/img/icon-facebook.png')}}" class="icon-center" alt=""></a>
            <a href=""><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt=""></a>
                </div>
        </div>
        <div>
            <h3>pagamento</h3>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div>
          <h3>contato</h3>
          <ol>
              <li><a href="">(21) 9999-9999</a></li>
              <li><a href="">(21) 9999-9999</a></li>
              <li><a href="mailto:comercial@gmail.com">comercial@gmail.com</a></li>
          </ol>
      </div>
    </section>
    </footer>
    <!-- Final do footer -->
    <!-- Começo do copy -->
    <section class="copy">
        
            <p><small>doceriagardenia - 2021 alguns direitos reservados</small></p>
            <a href="#">adm</a>
        
    </section>
    <!-- Final do copy -->

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

                    

 /*Menu Hamburguer*/
const btnMobile = document.getElementById("btn-mobile");

function toggleMenu(event) {
  if (event.type === "touchstart") event.preventDefault();
  const nav = document.getElementById("nav");
  nav.classList.toggle("active");
  const active = nav.classList.contains("active");
  event.currentTarget.setAttribute("aria-expanded", active);
  if (active) {
    event.currentTarget.setAttribute("aria-label", "fechar menu");
  } else {
    event.currentTarget.setAttribute("aria-label", "abrir menu");
  }
}

btnMobile.addEventListener("click", toggleMenu);
btnMobile.addEventListener("touchstart", toggleMenu);
      </script>
</body>
</html>

<!-- https://getbootstrap.com/docs/4.0/components/card/ -->

