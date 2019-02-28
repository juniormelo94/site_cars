<?php

	include('../Model/CadastrarModel.php');
	include('Validacoes/ValidaDadosCadastrar.php');

	Class CadastrarController extends ValidaDadosCadastrar{

		public function cadastrar($dados)
		{
			$validar = $this->validar($dados);

			// echo "<pre>";
			// var_dump($validar);
			// die();

			if ($validar['status'] == 'error') {
				return json_encode($validar);
			}

			$cadastrarModel = new CadastrarModel();
			return $cadastrarModel->cadastrar($dados);

		}
	}

	$cadastrar = new CadastrarController();
	echo json_encode($cadastrar->cadastrar($_POST));

	// echo (new Cadastrar())->cadastrar($_POST); outra opção de uso

?>