
<?php
	
	Class VerificaSeUsuarioJaExiste {

		public function verifica($conexao, $usuario, $email)
		{

			$sql = "SELECT * FROM cadastro WHERE cadastroUsuario = '$usuario' OR cadastroEmail = '$email'";

			$retorno_db = mysqli_query($conexao, $sql);

			$inf_usuario = mysqli_fetch_array($retorno_db);

			if(!empty($inf_usuario)){
				if($inf_usuario['cadastroUsuario'] == $usuario){
					return ["status" => "error", "msg" => "Esse usuario ja existe"];	
				} elseif($inf_usuario['cadastroEmail'] == $email){
					return ["status" => "error", "msg" => "esse email ja existe"];	
				}
			}

			return ['status' => 'ok'];

		}
	}

?>