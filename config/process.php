<?php

  include_once("connection.php");

    //CEP informado pelo usuário//
    $cep = $_POST['cep'];


    //vamos consulta primeiro a nossa base em busca do cep informado
	$query = "SELECT * FROM ceps WHERE cep = '{$cep}'";
 
    $resultado = mysqli_query($conexao, $query);

    //ATRIBUINDO VALORES AOS MEU ARRAY//
    if(mysqli_num_rows($resultado) > 0){
        while($linha = mysqli_fetch_array($resultado)){
           $endereco = $linha['logradouro'];
           $bairro = $linha['bairro'];
           $localidade = $linha['localidade'];
           $UF = $linha['uf'];
        }
    }
    else{
        //Pesquisando via WEB, endereço completo a partir do CEP//
        $url = "https://viacep.com.br/ws/".$cep."/xml/";

            //Transforma String em Objeto///
            $xml = simplexml_load_file($url);

        //Dados a serem inseridos//
        $endereco = $xml->logradouro;
        $bairro = $xml->bairro;
        $localidade = $xml->localidade;
        $UF = $xml->uf;

        
        //INSERIR NO BANCO DE DADOS//
        $query = "insert into ceps (cep, logradouro, bairro, localidade, uf) values ('{$cep}', '{$endereco}', '{$bairro}', '{$localidade}', '{$UF}')";

        $conexao = mysqli_connect('localhost', 'root', '', 'tb_cep');
        mysqli_query($conexao, $query);
        mysqli_close($conexao);
        }
