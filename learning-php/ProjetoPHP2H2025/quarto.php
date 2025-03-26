<?php 
	print("Usando o print para exibir na tela <br/>");

	$data = "17 de março de 2025";
	$salario = 1509.00;
	$cargo = "Estagiária";

	echo("Arquivo criado em $data <br/>");

	printf("Salário minimo: R$ %.2f por mês.",$salario);

	$texto = sprintf("%s recebe R$ %.2f por mês.",$cargo,$salario*2);

	echo ($texto);

 ?>