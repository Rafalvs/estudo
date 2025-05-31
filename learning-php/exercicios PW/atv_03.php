<?php

/*
EX1
Faça um aplicativo que receba duas notas de seis alunos, calcule e mostre:
a. A média aritmética das duas notas de cada aluno;
b. A mensagem que está na tabela a seguir:
c. O total de alunos aprovados;
d. O total de alunos de exame;
e. Total de alunos reprovados;
f. A média da classe.

$aluno1_nota1 = 6
$aluno1_nota2 = 8
$aluno2_nota1 = 4
$aluno2_nota2 = 4
$aluno3_nota1 = 5
$aluno3_nota2 = 9
$aluno4_nota1 = 2
$aluno4_nota2 = 7
$aluno5_nota1 = 6
$aluno5_nota2 = 10
$aluno6_nota1 = 1
$aluno6_nota2 = 3

$reprovados = 0;
$exame = 0;
$aprovados = 0;

function media(nota1, nota2)
{
    $media = $nota1 + $nota2 / 2;
    if($media < 3)
    {
        echo("Reprovado");
        $reprovados++;
    }
    elseif($media > 3 && $media < 7)
    {
        echo("Exame");
        $exame++;
    }
    else
    {
        echo("Aprovado");
        $aprovados++;
    }
}
echo("Aluno1: ");
$aluno1_media = media($aluno1_nota1, $aluno1_nota2);
echo("Aluno2: ");
$aluno2_media = media($aluno2_nota1, $aluno2_nota2);
echo("Aluno3: ");
$aluno3_media = media($aluno3_nota1, $aluno3_nota2);
echo("Aluno4: ");
$aluno4_media = media($aluno4_nota1, $aluno4_nota2);
echo("Aluno5: ");
$aluno5_media = media($aluno5_nota1, $aluno5_nota2);
echo("Aluno6: ");
$aluno6_media = media($aluno6_nota1, $aluno6_nota2);

$media_da_classe = $aluno1_media + $aluno2_media + $aluno3_media + $aluno4_media + $aluno5_media + $aluno6_media / 6;
echo($media_da_classe);

echo("Total de alunos aprovados: " . $aprovados);
echo("Total de alunos de exame: " . $exame);
echo("Total de alunos reprovados: " . $reprovados);

EX2
Faça um programa em PHP para gerenciar um sistema de reservas de mesas em uma casa de espetáculo.
A casa possui 40 mesas de 6 lugares cada. Um cliente fornece o número da mesa e a quantidade de lugares desejada.
O sistema deverá informar se é possível realizar a reserva e atualizar a reserva. Se não for possível, emitir uma mensagem.
O programa termina quando ou usuário digitar 0 (zero) para uma mesa ou quando todos os 240 lugares estiverem ocupados.

$total = 40 * 6;
$cliente_input = -1;
$reserva = 0;

while($cliente_input != 0)
{
    //input
    $reserva = $reserva + $cliente_input;

    if($reserva > $total)
    {
        echo("Não há reservas, estamos lotados.");
        $cliente_input = 0;
    }
}
*/

?>