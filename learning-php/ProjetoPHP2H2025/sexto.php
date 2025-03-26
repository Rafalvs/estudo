<?php 
	$ano = 2025;
	function exibir(){
		GLOBAL $ano;
		$ano++;
		return $ano;

	}
	echo("Ano: $ano <br/>");
	echo ("Ano: " . exibir());
	echo ("<br/>Ano: $ano");


 ?>