
<?php

	require_once "../configuracoes.php";

	class VerificaSessao{

		public function verifica(){

			// session_start();
			// echo "<pre>";
			// print_r($_SESSION);

			if(empty($_SESSION['email']) || empty($_SESSION['usuario']
			)){
				header('Location:'.URL_PRINCIPAL.'index.php');
			}
		}
	}

?>