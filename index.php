<?php
    include_once("templates/header.php");
?>
        
    <div class="container" id="container-title">
            <h1 class="text-center">BUSCA DE ENDEREÇO VIA CEP</h1>
            <p class="information text-center">Digite um CEP válido e localize o endereço</p>
        </div>
        <br>
        <br>
        <form action="results.php" method="POST" name="formulario">
            <div class="container">
                <div class="form-row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-4">
                        <label>CEP: <i class="fas fa-map-marked-alt"></i></label>
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="9" minlength="9" placeholder="Digite apenas números" required autofocus ><br>
                    </div>
                    
                    <div class="col-md-4 text-initial" id="button" >
                            <br>
                            <button class="btn btn-primary btn-lg" onclick="validar()">
                                Consultar <i class="fa fa-search"></i>
                            </button>
                    </div>  
                </div>
            </div>
        </form>
    
    <script type="text/javascript">
		var campoCEP = document.getElementById('cep');
		campoCEP.oninput = function () {
			
			var cep = campoCEP.value;
			if (cep.length == 5){
				campoCEP.value += "-";
			}			
		}
	</script>

<?php
    include_once("templates/footer.php");
?>