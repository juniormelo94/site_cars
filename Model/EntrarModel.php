<?php
	require_once('ConexaoDataBase.php');
	require_once('EntrarSelectModel.php');

	class EntrarModel extends ConexaoDataBase{

		public function entrar($dados)
		{
			$conexao = $this->conectar_dataBase();

			$emailSenhaExistem = New EntrarSelectModel();
			return $emailSenhaExistem->select($conexao, $dados['email'], $dados['senha']);
		}
	}
?>
