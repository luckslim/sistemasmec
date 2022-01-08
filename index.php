
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<nav>
<?php

 $hoje = date('d/m/Y'); 
 echo $hoje;

?> 
</nav>

<div> 
    <h2>Login</h2>
    <hr>
    
    <?php
        //para printar msg de verificaçao no  banco
        session_start();
        sleep(1);
        
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
        session_destroy();
        
        /*
        include_once('send.php');
        if(!empty($email) or !empty($senha)){
            echo "$erro";
        }
        
        */
    ?>
    
    <form action="send.php" method="post">
        <input type="email" name="email" placeholder="Digite seu email" required><br>
        <input type="password" name="senha" placeholder="Digite sua senha" required ><br>
        <input  class="botao" type="submit" value="Enviar!"><br>

            Ainda não é inscrito?<a class="link" href="Cadastro.php">Cadastre-se</a><br>
            <a href="tabela.php" class="botao" > Ver Listagem</a>


    </form>
</div>  

</body>
</html>