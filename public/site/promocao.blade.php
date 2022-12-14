<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('/site/src/style.css')}}">
    <link rel="stylesheet" href="{{asset('/site/src/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Promoção Doceria Gardenia</title>
</head>
<body>
    <header id="header" class="header">
        <a id="logo" class="logo" href="index.html">
          <img id="logo" class="logo" src="src/img/logo-gardênia.png" alt="" />
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
            <li><a href="index.html">inicio</a></li>
            <li><a href="quemSomos.html">quem somos</a></li>
            <li><a href="produtos.html">produtos</a></li>
            <li><a href="promocao.html">promoção</a></li>
            <li><a href="contato.html">contato</a></li>
            <li>
              <a href="carrinho.html"><img src="src/img/icon-carrinho.png" alt="" srcset="" /></a>
            </li>
          </ul>
        </nav>
      </header>
    <br>
    <h1 style="text-align: center;">Promoções</h1>
    <br>

    <section class="third-cont">
      <section class="third-contp2">
       
        <article class="container">

          <div class="card-body">
            <img
              src="src/img/chocotone.png"
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
                <img src="src/img/icon-carrinho.png" alt="" />
              </div>
            </div>
          </div>  
        </article>
    </section>
  </section>

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
            <a href=""><img src="src/img/icon-facebook.png" alt=""></a>
            <a href=""><img src="src/img/icon-insta.png" class="icon-center" alt=""></a>
            <a href=""><img src="src/img/icon-twt.png" alt=""></a>
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
        
            <p><small>marmitaria - 2021 alguns direitos reservados</small></p>
            <a href="./Doceria Gardenia ADM/sidebars/index.html">adm</a>
        
    </section>
    <!-- Final do copy -->
    <script>
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