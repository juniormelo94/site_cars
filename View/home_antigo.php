
<?php

  session_start();
  require_once "../configuracoes.php";
  require_once "../Model/VerificaSessao.php";
  require_once "../Controller/BuscarCarrosController.php";
  require_once "cabecalho.php";

  $verifica = new VerificaSessao();
  $verificaSesseao = $verifica->verifica();

  $buscarCarros = new BuscarCarrosController();
  $buscarCarros = $buscarCarros->buscarCarrosController();  

?>

  <body>

    <header>
      <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_cadastrar"">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_entrar">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="btn_sair()">Sair</a>
            </li>
          </ul>    
        </div>
      </div>


      <div class="div_barra navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <div class="div_img_logo"> <img class="div_img_logo" src="<?php echo URL_PRINCIPAL;?>public/images/7326_256x256.png"> </div>
            <strong>CARS</strong>
          </a>

          <div>
            <a class="nome_usuario navbar-brand" href="#">
            <i class="fa fa-user"></i>
              Junior
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

        </div>
      </div>
    </header>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
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
    </div>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Encontre o seu carro!</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="btn btn-primary my-2">Main call to action</a>
            <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

          <?php foreach ($buscarCarros as $key => $carroDados) {
            // echo "<pre>";
            // print_r($carroDados);
         ;?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <h5>
                    <?php echo $carroDados['dadosNome'];?>
                  </h5>
                  <p class="card-text mb-1">
                    <?php echo $carroDados['dadosMarca'];?>
                  </p>
                  <p class="card-text mb-1">
                    <?php echo $carroDados['dadosCategoria'];?>
                  </p>
                  <p class="card-text mb-1">
                    <?php echo 'R$ '.$carroDados['dadosValor'];?>
                  </p>
                  <p class="card-text mb-1">
                    <?php echo $carroDados['dadosResumo'];?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

          <?php };?>

           
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p>© 2019 CARS / Todos os direitos reservados.</p>
      </div>
    </footer>

<?php

  require_once "rodape.php";

?>