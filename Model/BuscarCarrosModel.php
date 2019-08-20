<?php
	require_once('ConexaoDataBase.php');

	class BuscarCarrosModel extends ConexaoDataBase{

		public function buscarCarrosModel()
		{
			$conexao = $this->conectar_dataBase();

			$sql = "SELECT * FROM dadosCarros AS dc
					LEFT JOIN imgCarros AS ic
					ON(dc.dadosId = ic.idDadosCarros)";

			$retorno_db = mysqli_query($conexao, $sql);
	
			$dados = [];
			while($linha = mysqli_fetch_assoc($retorno_db)){
				$dados[] = $linha;
			}

			if(!empty($dados)){
				return $dados;
			}

			return "Error ao tentar trazer informações";
		}
	}
?>