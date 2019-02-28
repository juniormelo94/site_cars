<?php

	Class ValidaDadosCadastrar{

		public function validar($dados)
		{
			if($dados['usuario'] == ''){
				return ["status" => "error", "msg" => "Usuário não está preenchido"];
			} elseif($dados['email'] == ''){
				return ["status" => "error", "msg" => "E-mail não está preenchido"];
			}elseif($dados['senha'] == ''){
				return ["status" => "error", "msg" => "Senha não está preenchido"];
			}

			return ["status" => "ok"];
		}

	}

?>