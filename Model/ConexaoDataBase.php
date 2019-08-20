<?php

	class ConexaoDataBase{

		private $host = 'localhost';
		private $usuario = 'root';
		private $senha = 'root';
		private $dataBase = 'site_cars';

		public function conectar_dataBase()
		{
			$connect = mysqli_connect($this->host, $this->usuario, $this->senha, $this->dataBase);

			mysqli_set_charset($connect, 'utf8');

			if(mysqli_connect_errno()){
				echo 'Erro ao tentar conectar com banco de dados:'.mysqli_connect_errno();
			}

			return $connect;
		}
	}
?>