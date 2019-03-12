
<?php

	require_once('../configuracoes.php');

	Class SalvarImagem{

		public function salvarImagem(){
			$salvarImagem = PASTA_PUBLIC.'images/';
			$caminhoImagem = URL_PUBLIC.'images/'. basename($_FILES['imagem']['name']);

			$salvarImagem = $salvarImagem . basename($_FILES['imagem']['name']);
			
			move_uploaded_file($_FILES['imagem']['tmp_name'], $salvarImagem);

			return $caminhoImagem;
		}

	}

?>