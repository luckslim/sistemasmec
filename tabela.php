<?php
session_start();
include_once('lista/ligar.php');






?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgba(7, 47, 133, 0.925)
        }
        h1{
            text-align:center;
            width: 420px;
            margin: 150px auto 0px auto;
            font-size:80px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color:white; 
        }
        h2{
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(7, 47, 133, 0.925);
        }
        div{
            font-family: Arial, Helvetica, sans-serif;
            
            text-align: center;
            border-radius: 30px;
            background-color: rgb(255, 255, 255);
            font-family: Arial, Helvetica, sans-serif;color: rgb(16, 17, 16);
            width: 420px;
            margin: 130px auto 0px auto;
            box-shadow: 4px 5px 5px rgb(6, 25, 53);
        
        }

        input{
            margin-left: 2.5%;
            display: block;
            height: 25px;
            width: 400px;
            margin: 2,5px;
            border-radius: 10px;
            border:1px solid black
        }
        .botao{
            background-color: royalblue;
            color: seashell;
            margin-left: 28%;
            display: block;
            height: 30px;
            width: 200px;
            margin: 2,5px;
            border-radius: 1px;
            border:1px solid black

        }
        a{
            text-decoration: none;
            color:rgb(25, 88, 31);
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 200%;

        }




    </style>
</head>
<body>
<h1>Listagem</h1>

<div>
    
    <?php



        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }


    $result_produtos="SELECT * FROM listagem";
    $resultado_produtos= mysqli_query($conn,$result_produtos);
    while($row_produtos=mysqli_fetch_assoc($resultado_produtos)){
        echo "ID:" .$row_produtos['id']."<br>";
        echo "Nome:" .$row_produtos['nome']."<br>";
        echo "Escola/Creche:" .$row_produtos['escola']."<br>";
        echo "Pregão:" .$row_produtos['pregão']."<br>";
        echo "Data de Chegada:" .$row_produtos['created']."<br><hr>";
        
    }
    ?>
</div>


</body>
</html>