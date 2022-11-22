@extends('components.layout')

@section('title','Doceria Gardenia - Quem Somos')

@section('inicio', 'Quem Somos') 

@section('content')
    <!-- Começo do header -->
    <section class="intro-quemsomos">
       <img src="{{ asset('/site/src/img/marmita.png')}}" class="d-block w-100" alt="banner de promoção">
    </section>
  

    <section class="QS-containerGeral">
      <ul>
        <li class="QS-containerConteudo">
            <article>
            <div class="infromacoes">
              <h2>Marmitaria</h2>
              <p>
                Tudo começou a 3 anos atrás, 
                quando Antônia foi indicada para fazer uma faxina em São Paulo. 
                Após o término da faxina, ela resolveu cozinhar, pois sempre foi algo que teve prazer em fazer.
                Ela pegou todos os ingredientes que tinham na geladeira e disso saiu um peito de frango ao molho com laranja e mostarda, 
                um arroz com cenoura e salsinha e uma batata dourada.
                3 anos se passaram, e atualmente Antonia Viana é chefe de uma academia inteira de prédio comercial 
                e outros clientes por fora.
                Trabalha especialmente para o público fitness, 
                a maioria dos clientes tem suas refeições personalizadas com receitas com  prescrição do nutricionista.
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
              Oferecer produtos e serviço na área gastronômica, valorizando o aspecto nutritivo, a qualidade, o sabor e a
              correta técnica de elaboração de cada alimento, para contribuir para a saúde dos nossos clientes, ofertando um
              sistema de atendimento diferenciado.
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
              Ser uma empresa reconhecida como referência dentro da gastronomia braslileira buscando qualidade,
              agilidade no atendimento e manter um bom relacionamento com os clientes, colaboradores e fornecedores.
              Sempre valorizando essa troca de experiência na convivência entre o restaurante e nossos clientes.
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
              Nutrição, para promover a saúde e a boa qualidade de vida.
              Comida saudável, para contribuir com a mudança do estilo de vida.
              Sabores, para proporcionar o prazer de comer bem.
              Variedade, para oferecer opções com qualidade para todos os gostos.
              Atendimento com excelência, para apresentar soluções gastronômicas.
              Serviço rápido e prático, para adequar ao estilo de vida de quem não tem tempo a perder.
            </p>
          </div>
          </article>
        </li>
      </ul>
    </section>


 @endsection
 