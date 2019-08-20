<?php

	require_once "../configuracoes.php";

	class VerificaSessao{

		public function verifica()
		{
			if(empty($_SESSION['email']) || empty($_SESSION['usuario']
			)){
				header('Location:'.URL_PRINCIPAL.'index.php');
			}
		}
	}
?>