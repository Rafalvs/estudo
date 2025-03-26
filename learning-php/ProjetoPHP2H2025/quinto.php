<?php 
	$nome = "Etecia";


	function exibir(){
		$nome = "Etec Irmã Agostina";

		echo "Variável de escopo de função: $nome";	
	}

	exibir();

	echo "<br/> Variável de escopo de script: $nome";

 ?>