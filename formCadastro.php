<?php
    if(isset($_POST['submit'])) //vai verificar se existe variável submit, quando clicar em
    {
        /*
        print_r('Nome: '. $_POST['nome']);
        print_r('<br>');
        print_r('E-mail: '. $_POST['email']);
        print_r('<br>');
        print_r($_POST['senha']);
        print_r('<br>');
        print_r('Data de Nascimento: '.$_POST['data_nascimento']);
        */

        include_once ('config_db.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha']; //faltava acrescentar senha como parametro
        $data_nasci = $_POST['data_nascimento'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $login = $_POST['login']; //pelo visto, não vamos precisar
        //Obs.: $Login é mesmo desnecessário pra ter no cadastro
        $result = mysqli_query($conexao, 
        "INSERT INTO aluno (aluno_nome, aluno_email, aluno_senha, aluno_dtnasc, aluno_tel, aluno_cpf, aluno_rg)
        VALUES ('$nome', '$email', '$senha','$data_nasci', '$telefone', '$cpf', '$rg')");

        header('location: login.php'); //depois de preencher o form, deve redirecionar para a tela: login.php
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <link rel="shortcut icon" href="img/UsCodersIcon.ico" type="image/x-icon">
    <title>Us Coders | Cadastro </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');

    *{
        font-family: 'sarala';

    }
    body{
        font-size: 100%;
        background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
    }
    .box-formulario{
        color:  rgb(61, 3, 61);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: whitesmoke;
        padding: 15px;
        border-radius: 15px;
        width: 40%;
    }
    fieldset{
        border: 3px solid rgb(61, 3, 61);
    }
    legend{
        border: 1px solid whitesmoke;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
    }
    .inputBox{
        position: relative;
    }
    
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid dodgerblue;
        outline: none;
        color:  rgb(61, 3, 61);
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }
    .inputUser:focus ~.labelInput, .inputUser:valid ~.labelInput{
        top: -20px;
        font-size: 10px;
        color: dodgerblue;

    }
    #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 18px;
    }
    #submit{
        background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }
    .btnVoltar{
        color: whitesmoke;
    }
    </style>
</head>
<body>
    <a href="home.php" class="btnVoltar">Voltar</a>
    <div class="box-formulario">
        <form action="formCadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulário p/ Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <!--nome-->
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label id="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <!--email-->
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label id="email" class="labelInput">E-mail</label>  
                </div>
                <br>
                <div class="inputBox">
                    <!--senha-->
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label id="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <!--data de nascimento-->
                <label id="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <div class="inputBox">
                    <!--telefone-->
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label id="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div class="inputBox">
                    <!--cpf-->
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label id="cpf" class="labelInput">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <!--rg-->
                    <input type="text" name="rg" id="rg" class="inputUser" required>
                    <label id="rg" class="labelInput">RG</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>