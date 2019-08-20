<?php
	require_once('../Model/CadastrarModel.php');
	require_once('Validacoes/ValidaDadosCadastrar.php');

	Class CadastrarController extends ValidaDadosCadastrar{

		public function cadastrar($dados)
		{
			$validar = $this->validar($dados);

			if ($validar['status'] == 'error'){
				return json_encode($validar);
			}

			$cadastrarModel = new CadastrarModel();
			return $cadastrarModel->cadastrar($dados);
		}
	}

	$cadastrar = new CadastrarController();
	echo json_encode($cadastrar->cadastrar($_POST));
?>