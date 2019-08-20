<?php
	require_once('InserirImagemCarsModel.php');

	class InserirCarsModel extends InserirImagemCarsModel{

		public function inserir($conexao, $dados, $caminhoImagem)
		{
			try {
				$nome = $dados['nome'];
				$marca = $dados['marca'];
				$resumo = $dados['resumo'];
				$categoria = $dados['categoria'];
				$valor = $dados['valor'];

				$sql = "INSERT INTO dadosCarros (dadosNome, dadosMarca, dadosResumo, dadosCategoria, dadosValor) VALUES('$nome', '$marca', '$resumo', '$categoria', '$valor')";

				if(mysqli_query($conexao, $sql)){
					$id = mysqli_insert_id($conexao);

					$inserirImg = $this->inserirImg($conexao, $caminhoImagem, $id);

					if($inserirImg["status"] == "error"){
						return $inserirImg;
					}

					return ["status" => "success", "msg" => "Informações cadastradas com sucesso!"];
				} 

				return [
					"status" => "error",
					 "msg" => mysqli_errno($conexao) . ": " . mysqli_error($conexao)
				];
			} catch (Exception $e) {
				return [
					"status" => "error",
					 "msg" => "catch: ".$e->getMessage()." Arquivo ".$e->getFile()." Linha ".$e->getLine()
				];
			}
		}
	}
?>