<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.0/examples/album/ -->
<html lang="pt-br">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/7326_256x256.png">

    <title>Site CARS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>

  <body>

    <header>
      <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white"> <a href="View/cadastre_se.php"> Cadastre-se</a> </h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white"> <a href="View/entrar.php"> Entrar </a> </h4>
              <ul class="list-unstyled">
                <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Like on Facebook</a></li>
                <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="div_barra navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="navbar-brand d-flex align-items-center">
            <div class="div_img_logo"> <img class="div_img_logo" src="images/7326_256x256.png"> </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> -->
            <strong>CARS</strong>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
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
          <h1 class="jumbotron-heading">O que vou encontrar?</h1>
          <h2 class="jumbotron-heading">Os melhores carros</h2>
          <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>

          <h2 class="jumbotron-heading">Marcas em alta</h2>
          <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>

        <div>
          <h2 class="jumbotron-heading">O valor ideal</h2>
          <p class="lead text-muted">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida ante et leo consequat, ut consequat velit varius. Proin imperdiet vel enim ac consequat. Sed dignissim ut dui non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed elit quis massa condimentum tincidunt.</p>
        </div>

          <p>
            <a href="View/cadastre_se.php" class="btn btn-primary my-2">Cadastre-se</a>
            <a href="View/entrar.php" class="btn btn-primary btn_padding my-2">  Entrar  </a>
          </p>
          <h4 class="jumbotron-heading">Cadastre-se, e acessar agora mesmo!</h4>
        </div>
      </section>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p>© 2019 CARS / Todos os direitos reservados.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="208" height="225" viewBox="0 0 208 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="11" style="font-weight:bold;font-size:11pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>