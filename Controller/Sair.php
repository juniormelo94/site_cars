
<?php
    require_once "../configuracoes.php";

	class Sair{

		public function sair(){
			session_start();
			session_destroy();
			return [
				"status" => "sucesso!",
				"data" => [
					"sair" => URL_PRINCIPAL.'index.php'
				]
			];
		}
	}

	$sair = new Sair();
	echo json_encode($sair->sair());

?>