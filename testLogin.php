<?php
    //esse arquivo irá verificar se os dados colocados no arquivo: login.php estão corretos.
    //Caso os dados estejão corretos, iniciar sessão
    //caso contrário, voltar para arquivo: login.php

    session_start();
    // print_r($_REQUEST); (<- usei isso aí pra verificar se estava recebendo os dados, tudo ok :))

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
        include_once('config_db.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM aluno WHERE aluno_email = '$email' AND aluno_senha = '$senha' ";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) <1){
            
            //print_r('Não existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php'); //Se os dados não forem compativeis
            
        } else{
            //print_r('Existe');
            
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sessaoUsuario.php'); // se os dados forem compativeis com o bd
            //Assim, vai iniciar sessão
            
        }

    }else{
    header('Location: login.php'); //Não acessa
}

?>