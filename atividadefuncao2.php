2- Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve
retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das
notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.
<br>
<?php

function alunoAprovado($n1, $n2) {
    // Verifica se ambas as notas são maiores que 7 e a soma é igual ou superior a 19
    if ($n1 > 7 && $n2 > 7 && ($n1 + $n2) >= 19) {
        return true;
    } else {
        return false;
    }
}

// Exemplo de uso:
$nota1 = 8;
$nota2 = 9;

if (alunoAprovado($nota1, $nota2)) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}
?>
<hr>