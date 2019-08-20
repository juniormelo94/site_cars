<?php
	class ValidarDadosCadastrarCars{

		public function validar($dados)
		{
			if($dados['nome'] == ''){
				return ["status" => "error", "msg" => "Campo nome  obrigatorio"];
			}elseif($dados['categoria'] == ''){
				return ["status" => "error", "msg" => "Campo categoria  obrigatorio"];
			}elseif($dados['marca'] == ''){
				return ["status" => "error", "msg" => "Campo marca obrigatorio"];
			}elseif($dados['resumo'] == ''){
				return ["status" => "error", "msg" => "Campo resumo obrigatorio"];
			}elseif($dados['valor'] == ''){
				return ["status" => "error", "msg" => "Campo valor obrigatorio"];
			}

			return ["status" => "ok"];
		}
	}
?>