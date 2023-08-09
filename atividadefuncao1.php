1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
Se o valor da soma for negativo a função deverá ser o valor 0.
<br>
<?php
function somarValores($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    if ($soma < 0) {
        return 0;
    }
    return $soma;
}

// Exemplos de uso da função
$resultado1 = somarValores(5, 8); // Soma = 13
$resultado2 = somarValores(-10, 6); // Soma = 0 (soma é negativa, retorna 0)

echo "Resultado 1: " . $resultado1 . "\n";
echo "Resultado 2: " . $resultado2 . "\n";
?>
<hr>