<?php

	Class InserirImagemCarsModel{

		public function inserirImg($conexao, $caminhoImagem, $id)
		{
			$sql = "INSERT INTO imgCarros (imgCaminho, idDadosCarros) VALUES('$caminhoImagem', '$id')";

			if(mysqli_query($conexao, $sql)){
				return ["status" => "success", "msg" => "Imagem salva com sucesso!"];
			}
			return ["status" => "error", "msg" => "Erro ao tentar salvar imagem!"];
		}
	}
?>