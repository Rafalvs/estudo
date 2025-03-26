<?php 
	
	function exibir(){
		STATIC $ano;
		$ano++;
		echo "<br/>" . $ano;
	}

	echo exibir();
	echo exibir();
	echo exibir();
	echo exibir();

 ?>