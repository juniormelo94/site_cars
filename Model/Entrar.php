
<?php

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if($email == '' || $senha == ''){
		if($email == ''){
			echo json_encode(["status" => "error", "msg" => "E-mail não está preenchido"]);
		} elseif($senha == ''){
			echo json_encode(["status" => "error", "msg" => "Senha não está preenchido"]);
		}
		
	}else{
		require_once('Conexao_dataBase.php');

		$senha = md5($_POST['senha']);
	//echo $usuario;
	//echo $senha;

		$cla_con_db = new Conexao_dataBase();
		$fun_con_db = $cla_con_db->conectar_dataBase();

		$sql = "SELECT cadastroEmail, cadastroUsuario, cadastroSenha FROM cadastro WHERE cadastroEmail = '$email' AND cadastroSenha = '$senha'";

		$retorno_db = mysqli_query($fun_con_db, $sql);

		if($retorno_db){
			$inf_usuario = mysqli_fetch_array($retorno_db);
			// var_dump($informacoes_usuario);
			//echo "<pre>";
			// print_r($informacoes_usuario['cadastroUsuario']);


			if(isset($inf_usuario['cadastroEmail'])){

				$_SESSION['usuario'] = $inf_usuario['cadastroUsuario'];
				$_SESSION['email'] = $inf_usuario['cadastroEmail'];
				$_SESSION['logado'] = true;

				header('Location: ../View/home.php');
			}else{

				header('Location: ../index.php?erro=1');
			}


		}else{
			echo json_encode(["status" => "error", "msg" => "Erro na execusão da consulta"]);
		}

	}



?>