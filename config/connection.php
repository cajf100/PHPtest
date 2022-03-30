<?php

    $servername = "localhost";
    $user =  "root";
    $password = "";
    $database = "tb_cep";

    
    $conexao = new  mysqli($servername, $user, $password, $database);

    
    if($conexao->connect_error){
        die("Conexão com o Site falhou, tente Novamente mais tarde" . $conexao->connect_error);
    };
