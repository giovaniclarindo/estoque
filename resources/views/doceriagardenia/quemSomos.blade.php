@extends('components.layout')

@section('title','Doceria Gardenia - Quem Somos')

@section('inicio', 'Quem Somos') 

@section('content')
    <!-- Começo do header -->
    <section class="intro-quemsomos">
       <img src="{{ asset('/site/src/img/1.png')}}" class="d-block w-100" alt="banner de promoção">
    </section>
  

    <section class="QS-containerGeral">
      <ul>
        <li class="QS-containerConteudo">
            <article>
            <div class="infromacoes">
              <h2>Gardênia</h2>
              <p>
                A Doceria Gardênia é uma micro-empresa que foi criada em outubro
                de 2019 e seu nome oficial foi dado em fevereiro de 2020. Em seu
                nascimento tiveram participação importante de seus amigos e
                parentes, que passaram a incentivar na produção e início de um
                próprio negócio. A partir de uma pesquisa em sua comunidade,
                observou-se que seu produto tinha potencial para ganhar lugar no
                mercado. Seu objetivo foi verificar a qualidade de seus produtos
                primários (Donuts e Bolos) e após os positivos resultados, o
                produto que obteve mais destaque foi o donuts. Tornando-se o
                "Queridinho da casa".
              </p>
            </div>
            <img
                src="{{ asset('/site/src/img/quemSomos-donut1.jpg')}}"
                alt=""
              />
          </article>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
            <img
                src="{{ asset('/site/src/img/quemSomos-donut2.jpg')}}"
                alt=""
              />
          <div class="infromacoes">
            <h2>Missão</h2>
            <p>
              Para entregar um produto nesses padrões, uso materiais de boa
              qualidade, faço uma boa higiene no local de trabalho e sempre faço
              pesquisa de preço p manter o custo-benefício dos clientes
            </p>
          </div>
          </article>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
          <div class="infromacoes">
            <h2>Visão</h2>
            <p>
              Sucesso pra mim não é necessariamente ficar rica, vejo isso como a
              consequência de um bom trabalho. Sucesso para mim é fazer algo e
              ter pessoas satisfeitas com isso. Ter clientes satisfeitos não tem
              preço, é ótimo receber bons feedbacks e ver um cliente fidelizar.
            </p>
          </div>
          <img
                src="{{ asset('/site/src/img/quemSomos-donut3.jpg')}}"
                alt=""
              />
          </article>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
            <img
                src="{{ asset('/site/src/img/quemSomos-donut4.jpg')}}"
                alt=""
              />
          <div class="infromacoes">
            <h2>Valores</h2>
            <p>
              Um produto artesanal de boa qualidade, com cuidado nos mínimos
              detalhes, ou seja, o produto é bonito visualmente, gostoso e com
              um ótimo custo-benefício para o cliente, sempre.
            </p>
          </div>
          </article>
        </li>
      </ul>
    </section>


 @endsection
 