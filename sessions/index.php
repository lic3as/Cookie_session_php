<?php 
	session_start(); 
	if(isset($_SESSION['user']) == true){
		header("Location: newsession.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <style>
    .container{
        text-align: center;
        font-family: Arial;
    }
    </style>
</head>
<body>
    <div class="container">
    <form action="" method="GET">
    <label for="a">Nome de usuário: </label>
    <input type="text" method="GET" name="un">
    <br>
    <br>
    <label for="a">Senha: </label>
    <input type="password" method="GET" name="pass">
    <br>
    <br>
    <button type="submit" method="GET" name="but">Entrar</button>
    </form>
    </div>
<?php
    if(isset($_GET['but'])){
    $username = $_GET['un'];
    $password = $_GET['pass'];
    $_SESSION['user'] = $username;
        if($password == $_GET['pass']){
            $_SESSION['pass'] = $password;
            header("Location: newsession.php");
        } else{
            echo "Usuário não encontrado.";
        }
    }
?>
</body>
</html>