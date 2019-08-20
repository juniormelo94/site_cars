<?php
	require_once('Validacoes/ValidarDadosCadastrarCars.php');
	require_once('../Model/CadastrarCarsModel.php');

	Class CadastrarCarsController extends ValidarDadosCadastrarCars{

		public function cadastrar($dados)
		{
			$validar = $this->validar($dados);

			if($validar["status"] == "error"){
				return $validar;
			}

			$cadastrarCarsModel = new CadastrarCarsModel();
			return $cadastrarCarsModel->cadastrar($dados);
		}
	}

	$cadastrarCars = new CadastrarCarsController();
 	echo json_encode($cadastrarCars->cadastrar($_POST));
?>