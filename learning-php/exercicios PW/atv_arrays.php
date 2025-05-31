<?php

/*
Resolva os problemas abaixo utilizando PHP com variáveis internas sem inserção de dados
pelo usuário reforçando o conceito de arrays.

1. Criar um sistema em php que calcule a soma das matrizes:

25 12 35  | 98 65 35
85 47 98  | 5 27 8
32 38 105 | 74 14 3
Matriz a  |  Matriz b

O sistema deverá imprimir a matriz resultado.

$x = array(
    array(25, 12, 35),
    array(85, 47, 98),
    array(32, 38, 105)
);

$y = array(
    array(98, 65, 35),
    array(5, 27, 8),
    array(74, 14, 3)
);

function array_soma(array $arr)
{
    $soma = array_sum($arr); // metodo array_sum para somar linha da array
    foreach($arr as $elemento) { // itera atraves de cada elemento das arrays
        $soma += is_array($elemento) ? array_soma($elemento) : 0; 
        // usa o metodo is_array para confirmar se cada elemento faz parte de uma array mesmo. Em seguida usa operador ternario
        // e chama recursivamente a mesma função array_soma para somar cada elemento, caso acabe a array, recebe o valor 0
    }
    return $soma;
}

$matriz1 = array_soma($x);
$matriz2 = array_soma($y);

2. Da mesma matriz acima deverá calcular o resultado da soma de cada matriz:

$total = $matriz1 + $matriz2;

3. Entre com os dados de 10 alunos pelo código em php, recebendo as informações como nome e uma nota do aluno. Armazene
estes dados em um array. Ao final do programa mostrar a média de nota da classe, e o nome do aluno que obteve maior nota.

$alunos = array(
    "Sauron" => 10,
    "Gandalf" => 9,
    "Gollum" => 6,
    "Bilbo" => 2,
    "Galadriel" => 4,
    "Arwen" => 3,
    "Frodo" => 1,
    "Saruman" => 8,
    "Eowyn" => 7,
    "Smaug" => 5
);

$media = array[0] + array[1] + array[2] + array[3] + array[4] + array[5] + array[6] + array[7] + array[8] + array[9] / 10;

echo("Media da classe = " . $media);

$maiorNota = max($notas);
$alunoComMaiorNota = array_search($maiorNota, $alunos);

echo("A maior nota foi: " . $maior . " do aluno " . $alunoComMaiorNota);

4. Crie um array que armazene o nome de todos os meses do ano.
Digite um número e ele informe qual o nome do mês correspondente.

$meses = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);

$input_do_usuario = 5;

switch ($input_do_usuario) {
    case 1:
        echo $meses[1];
        break;
    case 2:
        echo $meses[2];
        break;
    case 3:
        echo $meses[3];
        break;
    case 4:
        echo $meses[4];
        break;
    case 5:
        echo $meses[5];
        break;
    case 6:
        echo $meses[6];
        break;
    case 7:
        echo $meses[7];
        break;
    case 8:
        echo $meses[8];
        break;
    case 9:
        echo $meses[9];
        break;
    case 10:
        echo $meses[10];
        break;
    case 11:
        echo $meses[11];
        break;
    case 12:
        echo $meses[12];
        break;
    default:
        echo "Número inválido! Digite um valor entre 1 e 12.";
        break;
    }
*/

?>