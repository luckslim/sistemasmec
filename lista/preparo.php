<?php
session_start();
include_once("ligar.php");
//include_once('inicio.php');
$nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
$escola = filter_input(INPUT_POST, 'escola' , FILTER_SANITIZE_STRING);
$pregão = filter_input(INPUT_POST, 'pregão' , FILTER_SANITIZE_STRING);


//echo "nome $nome <br>" ;
//echo "escola $escola <br>";
//echo "pregão $pregão <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO listagem (nome ,escola , pregão , created) VALUES ('$nome','$escola','$pregão', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'> Cadastrado  com sucesso</p>";
	header("Location:inicio.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não cadastrado</p>";
	header("Location:inicio.php");
}

