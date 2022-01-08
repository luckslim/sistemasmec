<?php
    session_start();
    include_once('ligar.php');
    $id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result="DELETE FROM listagem WHERE id='$id'";
    $resultado_usuario=mysqli_query($conn,$result);

    if(!mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'> Apagado com sucesso!</p>";
        header("Location: listagem.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao apagar!</p>";
        header("Location: listagem.php");
    
    }

    /*
    $nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
    $escola = filter_input(INPUT_POST, 'escola' , FILTER_SANITIZE_STRING);
    $pregão = filter_input(INPUT_POST, 'pregão' , FILTER_SANITIZE_STRING);

    $id= filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT);
    $result_usuario= "DELETE FROM listagem WHERE id='$id'";
    //$result_usuario= "DELETE FROM listagem (nome ,escola , pregão , created) VALUES ('$nome','$escola','$pregão', NOW())";
    $resultado_usuario=mysqli_query($conn,$result_usuario);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'> Apagado com sucesso!</p>";
        header("Location: listagem.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao apagar!</p>";
        header("Location: listagem.php");
    }
    */




?>