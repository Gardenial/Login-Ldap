<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dbredes';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);  //cria a conexão com o banco de dados
    
    if ($conexao->connect_error) { //verifica se houve erro na conexão
        die("Conexão Falhou: " . $conexao->connect_error);
    }else {
        echo "Conexão efetuada com sucesso";
    }// Fim do If...Else


?>