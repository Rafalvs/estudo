<?php

/*
EX1
Construir um app em PHP que leia 2 números e efetue a adição.
a. Caso o valor somado seja maior que 20, este deverá ser apresentando somandose a ele mais 8;
b. Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado
subtraindo-se 5

$x = 20;
$y = 0;

$sum = $x + $y;

if($sum > 20)
{
    echo ("Resultado: ". $sum + 8);
}
else
{
    echo ("Resultado: ". $sum - 5);
}

EX2
Criar um aplicativo em PHP entrar com um número e informar
a. se ele é divisível por 10, por 5, por 2 ou
b. se não é divisível por nenhum destes

$x = 10;

if($x % 10 == 0)
{
    echo ("O número: ". $x ." é divisível por 10");
}
elseif($x % 5 == 0)
{
    echo ("O número: ". $x ." é divisível por 5");
}
elseif($x % 2 == 0)
{
    echo ("O número: ". $x ." é divisível por 2");
}
else
{
    echo ("Não é divisível");
}

EX3
Criar um aplicativo em PHP que possibilite entrar com nome, sexo e idade de uma pessoa.
a. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a
mensagem: ACEITA.
b. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = "tinkerbell";
$sexo = "FEMININO";
$idade = "1244";

$sexo = strtolower($sexo);

if($sexo == "feminino" && $idade < 25)
{
    echo ($nome . " ACEITA");
}
else
{
    echo ($nome . " NÃO ACEITA");
}

EX4
Criar um aplicativo que possibilite entrar com 3 números e possa imprimi-los em ordem
decrescente (insira números diferentes).

$x = 5;
$y = 15;
$z = 1;

if($x > $y && $x > $z)
{
    if($y > $z)
    {
        echo ($x . " " . $y . " " . $z);
    }
    else
    {
        echo($x . " " . $z . " " . $y);    
    }
}

if($y > $x && $y > $z)
{
    if($x > $z)
    {
        echo($y . " " . $x . " " . $z);
    }
    else
    {
        echo($y . " " . $z . " " . $x);
    }
}

if($z > $x && $z > $y)
{
    if($x > $y)
    {
        echo($z . " " . $x . " " . $y);
    }
    else
    {
        echo($z . " " . $y . " " . $x);
    }
}

EX5
Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça
as seguintes informações:
A maior altura e a menor altura;
A média de altura de mulheres;
A idade do homem mais velho e da mulher mais nova.

//Pessoa 1
$altura1 = 1.80;
$idade1 = 25;
$sexo1 = "masculino";

//Pessoa 2
$altura2 = 1.60;
$idade2 = 19;
$sexo2 = "feminino";

//Pessoa 2
$altura3 = 1.70;
$idade3 = 22;
$sexo3 = "feminino";

if($altura1 > $altura2)
{
    echo("Maior altura: " . $altura1 . " Menor altura: " . $altura2);
}
else
{
    echo("Maior altura: " . $altura2 . " Menor altura: " . $altura1);
}

if($sexo2 == "feminino" && $sexo3 == "feminino")
{
    $media = $altura2 + $altura3 / 2;
    echo("Media: " . $media);
}

if($idade1 > $idade2)
{
    echo("Idade mais velha: " . $idade1 . "Idade mais nova: " . $idade2);
}
else
{
    echo("Idade mais velha: " . $idade2 . "Idade mais nova: " . $idade1);
}

*/
?>