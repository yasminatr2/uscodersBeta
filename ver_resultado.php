<?php
session_start();
//inicio de verificação do email e senha
if ((!isset($_SESSION['email']) == true) and
    (!isset($_SESSION['senha']) == true)
) {
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
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/UsCodersIcon.ico" type="image/x-icon">
    <title>Us Coders | Resultado</title>
</head>

<body>
    <style>
        * {
            height: 100%;
        }

        body {
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9,
                        126));
            font-family: Arial;
        }

        .alert-info {
            margin-top: 50px;
            height: 320px;
            width: 350px;
            margin-left: 67vh;
            font-size: 25px;
        }

        .btn1 {
            width: 30vh;
            height: 10vh;
            margin-left: 45px;
            border-radius: 5px;
            font-size: 20px;
        }
    </style>

    <?php
    $opcao1 = $_POST["perg1"];
    $opcao2 = $_POST["perg2"];
    $opcao3 = $_POST["perg3"];
    $opcao4 = $_POST["perg4"];
    $opcao5 = $_POST["perg5"];
    $opcao6 = $_POST["perg6"];
    $opcao7 = $_POST["perg7"];
    $opcao8 = $_POST["perg8"];
    $opcao9 = $_POST["perg9"];
    $opcao10 = $_POST["perg10"];
    $resultado = 0;
    $resposta = 0;
    $erros = 0;
    $acertos = 10;

    if (
        !isset($opcao1) or !isset($opcao2) or !isset($opcao3) or
        !isset($opcao4) or !isset($opcao5) or !isset($opcao6) or
        !isset($opcao7) or !isset($opcao8) or !isset($opcao9) or !isset($opcao10)
    ) {
        echo "<script>alert('Complete o questionário!');</script>";
        echo '<script>location.href="cursoHTML.php";</script>';
    } else {
        //pergunta um
        if ($opcao1 == "opcao4") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta dois
        if ($opcao2 == "opcao3") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta tres
        if ($opcao3 == "opcao2") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta quatro
        if ($opcao4 == "opcao4") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta cinco
        if ($opcao5 == "opcao3") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta seis
        if ($opcao6 == "opcao1") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta sete
        if ($opcao7 == "opcao3") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta oito
        if ($opcao8 == "opcao2") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta nove
        if ($opcao9 == "opcao1") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
        //pergunta dez
        if ($opcao10 == "opcao1") {
            $resposta = $resposta + 1;
        } else {
            $erros = $erros + 1;
        }
    }
    ?>

    <?php $percentual_a = $resposta * 100 / $acertos;
    $percentual_a = round($percentual_a, 1);
    ?>

    <div class="alert alert-info" role="alert">
        <?php echo "Quantidade de acertos: " . $resposta . '<br>';
        echo "Quantidade de erros: " . $erros . '<br>';
        echo "Percentual de acertos: %" . $percentual_a . '<br>' . '<br>' . '<br>';

        if ($percentual_a == 100) {
            echo "Parabéns, você acertou tudo!";
        } else if ($percentual_a == 50) {
            echo "Que pena, você acertou só metade!";
        } else if ($percentual_a <= 50) {
            echo "Você acertou menos da metade, tente novamente!";
        }
        ?>

        <br><br><br>

        <a href="ViewCursos.php"><button class="btn1 btn-success">Finalizar curso</button></a>
        <br>
        <br>
        <a href="cursoHTML.php"><button class="btn1 btn-success">Voltar para as atividades</button></a>
    </div>

</body>

</html>