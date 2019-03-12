
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
            <span class="nome_usuario navbar-brand" href="#">
            <i class="fa fa-user"></i>
              <?php echo ($_SESSION['usuario']); ?>
            </span>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

        </div>
      </div>
    </header>

    <?php
      require_once "banner.php";
    ?>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Encontre o seu carro aqui!</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row" id="row-carros">
          <!-- aki é preenchido pelo javascript -->
          

           
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

<script type="text/javascript">
  buscar_carros();
</script>