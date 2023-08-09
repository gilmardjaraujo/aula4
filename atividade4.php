4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos
seu colega irá passar a ganhar mais que você.
<br>
$sal1 = 5000;<br>
$sal2 = 2500;<br>

<?php
$sal1 = 5000;
$sal2 = 2500;
$ano = 0;

while ($sal1 >= $sal2) {
    $sal1 += $sal1 * 0.10; // Aumento de 10% no salário 1
    $sal2 += $sal2 * 0.20; // Aumento de 20% no salário 2
    $ano++;
}

echo "Seu colega irá ganhar mais que você em $ano anos.";
?>
<hr>