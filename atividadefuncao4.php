4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:<br>
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).<br>
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo:
<br>
<?php
function calcularIMC($altura, $peso) {
    // Verifica se altura e peso são maiores que zero para evitar divisão por zero
    if ($altura <= 0 || $peso <= 0) {
        return "Altura e peso devem ser maiores que zero.";
    }

    //IMC
    $imc = $peso / ($altura * $altura);

    // Classificação
    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Normal";
    } elseif ($imc > 24.9 && $imc <= 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

// Exemplo de uso da função:
$altura = 1.75; // altura em metros
$peso = 70; // peso em kg
$resultado = calcularIMC($altura, $peso);
echo "Classificação: " . $resultado;
?>