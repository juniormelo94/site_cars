<?php
	require_once('../Model/BuscarCarrosModel.php');

	class BuscarCarrosController2 extends BuscarCarrosModel{

		public function buscarCarrosController2()
		{
			return $this->buscarCarrosModel();
		}
	}

	$carros = new BuscarCarrosController2();
	echo json_encode($carros->buscarCarrosController2());
?>