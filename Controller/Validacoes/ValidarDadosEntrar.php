<?php
	Class ValidarDadosEntrar{

		public function validar($dados)
		{
			if($dados['email'] == ''){
				return ["status" => "error", "msg" => "E-mail não está preenchido"];
			}elseif($dados['senha'] == ''){
				return ["status" => "error", "msg" => "Senha não está preenchido"];
			}

			return ["status" => "ok"];
		}
	}
?>