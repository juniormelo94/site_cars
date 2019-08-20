<?php
	include('../Model/EntrarModel.php');
	include('Validacoes/ValidarDadosEntrar.php');
	include('../Model/CriarSessao.php');

	class EntrarController extends ValidarDadosEntrar{
		
		public function entrar($dados)
		{
			$validar = $this->validar($dados);

			if($validar["status"] == 'error'){
				return $validar;
			}

			$entrarModel = new EntrarModel();
			$entrarModel = $entrarModel->entrar($dados);

			if($entrarModel['status'] == 'error') {
				return $entrarModel;
			} 
			
			//cria a sessao
			$CriarSessao = new CriarSessao();
			$CriarSessao = $CriarSessao->criar($dados['email'], $entrarModel['data']['usuario']);

			return $entrarModel;
			//redireciona o usuario
		}
	}

	$classEntrar = new EntrarController();
	echo json_encode($classEntrar->entrar($_POST));
?>