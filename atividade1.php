1- Termine o script abaixo, imprimindo todos os números entre $numero1 e $numero2.
<br>
$numero1 = 7;<br>
$numero2 = 27;<br>

<?php
$numero1 = 7;
$numero2 = 27;
// Verifica o número 1 é menor que o número 2
if ($numero1 < $numero2) {
    // Loop para imprimir todos os números entre $numero1 e $numero2
    for ($i = $numero1; $i <= $numero2; $i++) {
        echo $i . "<br>";
    }
    
} else {
    // Imprimi números entre $numero2 e $numero1 
    for ($i = $numero2; $i <= $numero1; $i++) {
        echo $i . "<br> ";
    }
}
?>
<hr>