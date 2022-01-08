<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
<?php
    session_start();
    ?>

    
    <?php
      /*  if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
        */
    ?>
    <div> 
        <h1>Cadastro</h1>
        <hr>
        <?php
            
            sleep(1);
            if(isset($_SESSION['msg1'])){
            echo $_SESSION['msg1'];
            unset($_SESSION['msg1']);
            }
        ?>
        <form action="processa.php" method="POST">
            <input type="text" name="nome" placeholder="Digite seu nome" required><br>
            <input type="email" name="email" placeholder="Digite seu email" required><br>
            <input type="email" name="confemail" placeholder="Digite seu email" required><br>
            <input type="password" name="senha" placeholder="digite sua senha" required><br>
            <input type="password" name="confsenha" placeholder="Confirme sua senha" required><br>
            <input class="botao" type="submit" value="Enviar!" >
            <a class="link" href="index.php">Fazer login!</a>

        </form>
    </div>  
</body>
</html>