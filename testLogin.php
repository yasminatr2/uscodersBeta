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

        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysquli_num_rows($result) <1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php'); //Se os dados não forem compativeis
        } else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            print_r('Location: sessaoUsuario.php'); // se os dados forem compativeis com o banco de dados
            //Assim, vai iniciar sessão
        }

    }else{
    header('Location: login.php'); //Não acessa
}

?>