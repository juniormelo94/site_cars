<?php
	require_once('ConexaoDataBase.php');
	require_once('InserirCarsModel.php');
	require_once('SalvarImagem.php');

	class CadastrarCarsModel extends ConexaoDataBase{

		public function cadastrar($dados)
		{
			$conexao = $this->conectar_dataBase();

			$salvarImagem = new SalvarImagem();
			$caminhoImagem = $salvarImagem->salvarImagem();

			$inserir = new InserirCarsModel();
			$inserir = $inserir->inserir($conexao, $dados, $caminhoImagem);

			mysqli_close($conexao);

			return $inserir;
		}
	}
?>