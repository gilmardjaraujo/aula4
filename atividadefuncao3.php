3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:<br>
• salários até R$ 3.000,00 , reajuste de 50%<br>
• salários de R$ 3.000,00 ou mais, reajuste de 30%<br>
<br>
<?php
function calcularSalarioReajustado($salario) {
    if ($salario <= 3000) {
        $reajuste = 0.5; // 50%
    } else {
        $reajuste = 0.3; // 30%
    }

    $salarioReajustado = $salario + ($salario * $reajuste);
    return $salarioReajustado;
}

// Exemplo de uso:
$salarioAtual = 2500; // Insira o salário atual do funcionário aqui

$salarioReajustado = calcularSalarioReajustado($salarioAtual);

echo "Salário reajustado: R$ " . number_format($salarioReajustado, 2, ',', '.');
?>
<hr>