<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <title>Us Coders | login </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');

    *{
        color:  rgb(61, 3, 61);
        font-family: 'sarala';

    }

    body{
        font-size: 100%;
        background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
    }

    div{
        background-color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 65px;
        border-radius: 15px;
    }

    input{
        padding: 10px;
        border:none;
        outline: none;
        font-size: 15px;
    }

    .inputSubmit{
        background-color: dodgerblue;
        border: none;
        padding: 9px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
        cursor: pointer;
        color: white;
    }
    .inputSubmit:hover{
        background-color: deepskyblue;

    }
    h1{
        text-align: center;
    }
    .btnVoltar{
        color: whitesmoke;
    }
    </style>
</head>
<body>
    <a href="home.php" class="btnVoltar">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <input class ="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>