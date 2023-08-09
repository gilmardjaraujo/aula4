3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for
<br>

<?php
// Função para gerar um vetor com valores aleatórios entre 0 e 100
function gerarVetorAleatorio($tamanho) {
    $vetor = array();
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand(0, 100);
    }
    return $vetor;
}

// Cria os dois vetores de 10 posições com valores aleatórios
$vetor1 = gerarVetorAleatorio(10);
$vetor2 = gerarVetorAleatorio(10);

// Inicializa o vetor de resultado
$vetorResultado = array();

// Realiza a soma dos elementos de mesmo índice e coloca o resultado no vetor de resultado
for ($i = 0; $i < 10; $i++) {
    $vetorResultado[] = $vetor1[$i] + $vetor2[$i];
}

// Imprime o conteúdo de cada vetor
echo "<br>Vetor 1: " . implode(', ', $vetor1) . "\n";
echo "<br>Vetor 2: " . implode(', ', $vetor2) . "\n";
echo "<br>Vetor Resultado: " . implode(', ', $vetorResultado) . "\n";
?>









<hr>