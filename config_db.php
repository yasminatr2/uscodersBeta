<?php

    $dbhost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = 'usbw'; //Depende de vocês aqui por conta da senha de cada um, minha senha é a padrão: usbw
    $dbName = 'uscoders';

    
    $conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso";
    } */
?>