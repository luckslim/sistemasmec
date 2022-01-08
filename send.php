<?php
session_start();
include_once('conexao.php');
//include_once('processa.php');
//!=>quer dizer negação.
    if(!isset($_POST["Enviar"])){               
        
        if(!empty($email) or !empty($senha)){
            echo "deu ruim";
            
        }else{

            /*ATENÇÃO NESSA PARTE MEU MN, SEM OS 2FILTER_INPUT E AS VARIAVEIS $SQL O USUARIO CONSEGUE O ACESSO AO 
            LOGIN SEM INSERIR A SENHA CORRETAMENTE
            MÓ MERDA CUIDADO COM ESSA PORRA!!! */

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $sql="SELECT email FROM usuarios WHERE email='$email'";
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
            $sql="SELECT senha FROM usuarios WHERE senha=(md5('$senha'))";
            
            
            $resultado=mysqli_query($conn,$sql,);
                if(mysqli_num_rows($resultado) > 0){
                    
                    $senha=MD5($senha);
                    $sql="SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
                    $resultado=mysqli_query($conn,$sql);

                    //array para printar msg de verificaçao no banco!
                    /*$_SESSION['msg'] = "<p style='color:green;'>Login feito com sucesso!!</p>";
                    header("Location: index.php");*/
                    //echo "Login feito com sucesso!" ;
                    session_start();
                    $_SESSION['login']='ok';

                    header("location:lista/inicio.php?login=ok","location:lista/listagem.php?login=ok");
                    
                   

                }else{
                    $_SESSION['msg'] = "<p style='color:red;'>senha/email incorreto ou usuario inexistente!!</p>";
	                header("Location: index.php");
                    //echo "usuario inexistente!!";
                }
            //echo "Login feito com sucesso!" ;
        }
        /*
        $sql="SELECT email FROM usuarios WHERE email='$email'";
        $resultado=mysqli_query($conn, $sql);
        if(mysqli_num_rows($resultado) > 0);
        $sql="SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";

        /*
        $erros= array();
        $email=mysqli_escape_string($conn, $_POST['email']);
        $senha=mysqli_escape_string($conn, $_POST['senha']);
        */
        
        
        
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>senha/email incorreto ou usuario inexistente!!</p>";
        header("Location: index.php");
        //echo "usuario inexistente!!";
    


    }