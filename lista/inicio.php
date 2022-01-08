<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:index.php?login=semsessao");
    

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>

<div>
    <h2>Manutenção</h2>
    <h1>SMEC</h1>
    <?php

        

        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }

        
    ?>
    <form action="preparo.php" method="post">
    <label for=""></label>
    <input required type="text" name="nome" placeholder="Nome"><br>
    <label  for=""></label>
    <input required type="text" name="escola"placeholder="Escola"><br>
    <label for=""></label>
    <input  required type="text" name="pregão" placeholder="Pregão"><br>

    <input type="submit" class="botao" value="Cadastrar" ><br>
    
    <a href="listagem.php" class="botao" >Listagem</a>


    </form>
   
</div>

    
</body>
</html>