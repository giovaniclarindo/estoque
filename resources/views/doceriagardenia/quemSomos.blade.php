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
                Tudo começou a 3 anos atrás, quando Antônia foi indicada para fazer uma faxina em São Paulo. 
                Após o término da faxina, ela resolveu cozinhar, pois sempre foi algo que teve prazer em fazer.
                Ela pegou todos os ingredientes que tinham na geladeira e disso saiu um peito de frango ao molho com laranja e mostarda, um arroz com cenoura e salsinha e uma batata dourada. Logo após o término ela foi embora da casa, e a noite o telefone tocou, com o feedback de que a comida estava maravilhosa e que ela nunca tinha comido algo tão bom ou parecido.
                A partir daquele momento, a pessoa a qual ela apenas foi faxinar, começou a indicar ela para as amigas da região, e desde então começou a receber vários convites para cozinhar.
                Então, ela começou a cozinhar para as amigas da qual a indicou de inicio.
                3 anos se passaram, e hoje Antonia Viana é chefe de uma academia inteira de prédio comercial e outras pessoas por fora.
                Trabalha especialmente para o público fitness, a maioria dos clientes são personalizados com receitas e acompanhamento por nutricionistas.
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
 