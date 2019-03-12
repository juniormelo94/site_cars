
<?php

	class CriarSessao{

		public function criar($email, $usuario){

			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['usuario'] = $usuario;

		}
	}

?>