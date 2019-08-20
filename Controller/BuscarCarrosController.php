<?php
	require_once('../Model/BuscarCarrosModel.php');

	class BuscarCarrosController extends BuscarCarrosModel{

		public function buscarCarrosController()
		{
			return $this->buscarCarrosModel();
		}
	}
?>