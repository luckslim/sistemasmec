<?php
session_start();
include_once("conexao.php");
/*include_once("index.php");*/

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$confsenha = filter_input(INPUT_POST, 'confsenha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$confemail = filter_input(INPUT_POST, 'confemail', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

//inserir crioptografia na senha => INSERT INTO usuarios (login, senha) VALUES ('usuario_1', MD5('abc123')); 

//inserir dados na tabela usuarios 


if(!isset($_POST["Enviar"])){
        
    if(!empty($email) or !empty($senha)){
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$sql="SELECT email FROM usuarios WHERE email='$email'";
		if($senha !== $confsenha or $email !== $confemail){

			$_SESSION['msg1'] = $_SESSION['msg1'] = "<p style='color:red;'>Os campos senha/email estão diferentes!!</p>";
				header("Location: cadastro.php");

		}else{
			$resultado=mysqli_query($conn,$sql);
			if(mysqli_num_rows($resultado) > 0){
				//array para printar msg de verificaçao no banco!
				$_SESSION['msg1'] = $_SESSION['msg1'] = "<p style='color:blue;'>Email Já Cadastrado, Faça Login ou Cadastre outro Usuário!!</p>";
				header("Location: cadastro.php");
				//echo "Login feito com sucesso!" ;

		
			}else{
				$result_usuario = "INSERT INTO usuarios (nome, senha , email, created) VALUES ('$nome',(MD5('$senha')), '$email', NOW())";
				//fazer conexao
				$resultado_usuario = mysqli_query($conn, $result_usuario);

				if(mysqli_insert_id($conn)){
					$_SESSION['msg1'] = "<p style='color:green;'>Usuário cadastrado</p>";
					header("Location: Cadastro.php");
				}else{
					$_SESSION['msg1'] = "<p style='color:red;'>Usuário não cadastrado</p>";
					header("Location: Cadastro.php");
				}
			

					
			}
		}



		/*
		$resultado=mysqli_query($conn,$sql);
			if(mysqli_num_rows($resultado) > 0){
				//array para printar msg de verificaçao no banco!
				$_SESSION['msg'] = $_SESSION['msg'] = "<p style='color:blue;'>Email Já Cadastrado, Faça Login ou Cadastre outro Usuário!!</p>";
				header("Location: cadastro.php");
				//echo "Login feito com sucesso!" ;

		
			}else{
				$result_usuario = "INSERT INTO usuarios (nome, senha , email, created) VALUES ('$nome',(MD5('$senha')), '$email', NOW())";
				//fazer conexao
				$resultado_usuario = mysqli_query($conn, $result_usuario);

				if(mysqli_insert_id($conn)){
					$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado</p>";
					header("Location: Cadastro.php");
				}else{
					$_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado</p>";
					header("Location: Cadastro.php");
				}
			

					
			}*/

        
        
        
    }
}
/*
$result_usuario = "INSERT INTO usuarios (nome, senha , email, created) VALUES ('$nome',(MD5('$senha')), '$email', NOW())";
//fazer conexao
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado</p>";
	header("Location: Cadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado</p>";
	header("Location: Cadastro.php");
}
*/