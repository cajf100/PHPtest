<?php
    include_once("config/process.php");
    include_once("templates/header.php");
?>
 
        <div class="container" id="Resposta">
            <h1 class="text-center" id="container-title">Resultado da busca:</h1>
            <br>
            <div id="results" class="text-center">
                <div class="col-md-12">
                    <label class="negrito">CEP: </label>
                    <?php echo $cep ?>
                </div>
                <div class="col-md-12">
                    <label class="negrito">Endereço:</label>
                    <?php echo $endereco ?>
                </div>
                <div class="col-md-12">
                    <label class="negrito">Bairro: </label>
                    <?php echo $bairro ?>
                </div>
                <div class="col-md-12">
                    <label class="negrito">Localidade: </label>
                    <?php echo $localidade ?>
                </div>
                <div class="col-md-12">
                    <label class="negrito">UF: </label>
                    <?php echo $UF ?>
                </div>

                    <div class="col-md-12" >
                            <br>
                            <a href="index.php">
                                <button class="btn btn-primary btn-lg">
                                    Fazer nova pesquisa <i class="fa fa-search"></i>
                                </button>
                            </a>
                    </div>
                
                <p>Obs: Caso os campos não sejam preenchidos, verifique o CEP e tente novamnte.</p>
            </div>
        </div>
    </body>

</html>