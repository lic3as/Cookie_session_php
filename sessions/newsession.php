<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>      
<?php
session_start(); 
    if(!isset($_SESSION['pass']) == true){
        unset($_SESSION['pass']);
        header("Location: index.php");
    }    
    echo "Nome de usuário: ".$_SESSION['user'];
?>
</body>
</html>