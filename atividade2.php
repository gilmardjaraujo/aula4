2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor.
<br>
<?php
// Função para gerar um vetor com valores aleatórios entre 0 e 10
function gerarVetorAleatorio($tamanho) {
    $vetor = array();
    for ($i = 0; $i < $tamanho; $i++) {
        $vetor[] = rand(0, 10);
    }
    return $vetor;
}

// Cria um vetor de 5 elementos inteiros com valores aleatórios entre 0 e 10
$vetor = gerarVetorAleatorio(5);

// Encontra o menor elemento e sua posição no vetor
$menorValor = min($vetor);
$posicao = array_search($menorValor, $vetor);

// Mostra o vetor gerado
echo "Vetor gerado: " . implode(', ', $vetor) . "\n";

// Mostra o menor elemento e sua posição
echo "<br>Menor elemento: " . $menorValor . "\n";
echo "<br>Posição no vetor: " . $posicao . "\n";
?>
<hr>