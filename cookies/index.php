<?php 
	session_start(); 
	if(isset($_COOKIE['nome']) == true){
		header("Location: mostracookie.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Nome</title>
    <style>
    .container{
        text-align: center;
        font-family: Arial;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="container">
    <form method="GET">
    <label for="a">Insira o seu nome: </label>
    <input type="text" method="GET" name="n">
    </form>
    <br>
    <button type="submit">Enviar</button>
    </div>
    <?php
    $name = $_GET['n'];
    if(isset($name)){
        setcookie("nome",$_GET['n']);
        header("location:mostracookie.php");
    }
    ?>
</body>
</html>