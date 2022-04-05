<?php

    session_start();
    //print_r($_SESSION);
    //inicio de verificação do email e senha
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $useLogado = $_SESSION['email']; //email do usuário na sessão
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <title>Us Coders | Sessão Ativa </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'sarala';

    }

    body{
        font-size: 100%;
        background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
        color:  white;
    }

    .btnSair{
        color:  white;
    }

    </style>
</head>
<body>
    <div>
    <a href="btnLogout.php" class="btnSair">Sair</a>
    </div>
    <?php
        echo"<h1>Bem vindo, $useLogado</h1>";
    ?>
</body>
</html>