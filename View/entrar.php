<?php

    session_start();

?>

<!DOCTYPE html>
<!-- saved from url=(0050)https://v4-alpha.getbootstrap.com/examples/signin/ -->
<html lang="pt-br">

    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/7326_256x256.png">

    <title>Site CARS</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body style="background: url(../images/003.jpg) repeat right top fixed;
    background-size: contain;">

    <div class="recebeD">
        
    </div>

    <div class="container">

    <form id="form_entrar" class="form-signin">
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <button class="btn btn-lg btn btn-dark btn-block" onclick="btn_entrar()" >Entrar</button>
    </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>

    <script src="../js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript" src="../js/script.js"></script>
  

</body></html>