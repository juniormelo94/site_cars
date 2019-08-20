<?php
	
	Class InserirUsuarioModel {
		
		public static function inserir($conexao, $senha, $usuario, $email)
		{
			$senha = md5($senha);
			$sql = "INSERT INTO cadastro (cadastroUsuario, cadastroEmail, cadastroSenha) VALUES('$usuario', '$email', '$senha')";

			if(mysqli_query($conexao, $sql)){
				return ["status" => "success", "msg" => "Usuário cadastrado com sucesso!"];
			}else{
				return ["status" => "error", "msg" => "Erro ao tentar cadastrar usuario!"];
			}				
		}		
	}
?>