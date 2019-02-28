
<?php

	require_once('ConexaoDataBase.php');
	require_once('InserirUsuarioModel.php');
	require_once('Validacoes/VerificaSeUsuarioJaExiste.php');
	
	Class CadastrarModel extends ConexaoDataBase{
		
		public function cadastrar($dados)
		{
			$conexao = $this->conectar_dataBase();

			$usuarioExiste = new VerificaSeUsuarioJaExiste();
			$usuarioExiste = $usuarioExiste->verifica($conexao, $dados['usuario'], $dados['email']);

			// $usuarioExiste = (new VerificaSeUsuarioJaExiste())->verifica($conexao, $dados['usuario'], $dados['email']); outre forma de usar


			if ($usuarioExiste['status'] == 'error') {
				return $usuarioExiste;
			}

			$resultado = InserirUsuarioModel::inserir($conexao, $dados['senha'], $dados['usuario'], $dados['email']);


			$conexao->close();	

			return $resultado;	


		}		
	}
	


?>