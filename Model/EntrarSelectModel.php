
<?php

	require_once "../configuracoes.php";

	class EntrarSelectModel{
		public function select($conexao, $email, $senha){

			$senha = md5($senha);

			$sql = "SELECT cadastroUsuario FROM cadastro WHERE cadastroEmail = '$email' AND cadastroSenha = '$senha'";

			$retorno_db = mysqli_query($conexao, $sql);
			$dados = mysqli_fetch_array($retorno_db);

			if(!empty($dados['cadastroUsuario'])){

				return [
					"status" => "success",
					"msg" => "Usuário encontrado!",
					"data" => [
						"usuario" => $dados['cadastroUsuario'],
						"home" => URL_PRINCIPAL.'View/home.php'
					]
				];
			}

			return [
				"status" => "error",
				"msg" => "Usuário não existe!"
			];
		}
	}

?>