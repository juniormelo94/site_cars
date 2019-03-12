<?php
  
  require_once "configuracoes.php";
  require_once "View/cabecalho.php";

?>

  <body >

    <header>
      <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_cadastrar">Cadastre-se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_entrar">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_dados_cars">Cadastrar Carro</a>
              </li>
            </ul>
        </div>
      </div>


      <div class="div_barra navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <div class="div_img_logo"> <img class="div_img_logo" src="public/images/7326_256x256.png"> </div>
            <strong>CARS</strong>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <?php
      require_once "View/banner.php";
    ?>
<!--     <div id="myCarousel" class="carousel slide w-100 h-75 d-inline-block" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner p-5" role="listbox">
        <div class="carousel-item active">
          <img class="img-fluid img-thumbnail rounded mx-auto d-block first-slide" src="public/images/carros.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="img-fluid img-thumbnail rounded mx-auto d-block first-slide" src="public/images/dirigindo.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="img-fluid img-thumbnail rounded mx-auto d-block first-slide" src="public/images/familia-viagem-feliz.jpg" alt="First slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->

    <main role="main">

      <section class="jumbotron ">
        <div class="container">
          <h1 class="jumbotron-heading text-center">O que vou encontrar?</h1>
          <h2 class="mt-5 jumbotron-heading">Os melhores carros</h2>
          <p class="mt-1 lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>

          <h2 class="mt-4 jumbotron-heading">Marcas em alta</h2>
          <p class="mt-1 lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>

        <div>
          <h2 class="mt-4 jumbotron-heading">O valor ideal</h2>
          <p class="mt-1 lead text-muted">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>
        </div>

        <div class="text-center">
          <p>
            <a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#modal_cadastrar">Cadastre-se</a>
            <a href="#" class="btn btn-primary btn_padding my-2" data-toggle="modal" data-target="#modal_entrar">  Entrar  </a>
          </p>
          <h4 class="text-center jumbotron-heading">Cadastre-se e acesse agora mesmo!</h4>
        </div>
      </section>

    </main>

    <!-- icludes de modals -->
    <?php

      include_once('View/modal_entrar.php');
      include_once('View/modal_cadastrar.php');
      include_once('View/modal_cadastrarDadosCars.php');
      include_once("View/modal_alertas.php");

    ?>

    <footer class="text-muted">
      <div class="container">
        <p>© 2019 CARS / Todos os direitos reservados.</p>
      </div>
    </footer>

<?php

  require_once "View/rodape.php";

?>