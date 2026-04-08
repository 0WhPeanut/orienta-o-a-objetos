<?php
$numeros = [];

while (true) {
    $num = readline("Digite um número (0 para parar): ");

    if ($num <= 0) {
        break;
    }

    $numeros[] = $num;
}

if (count($numeros) == 0) {
    echo "Nenhum número válido foi informado.\n";
    exit;
}

$soma = 0;
$pares = 0;
$impares = 0;
$div5 = 0;
$qtd369 = 0;

$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $n) {
    $soma += $n;

    if ($n % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    if ($n % 5 == 0) {
        $div5++;
    }

    if ($n == 3 or $n == 6 or $n == 9) {
        $qtd369++;
    }

    if ($n > $maior) {
        $maior = $n;
    }

    if ($n < $menor) {
        $menor = $n;
    }
}

$diferenca = $maior - $menor;

echo "\nResultados:\n";
echo "Soma: $soma\n";
echo "Quantidade de pares: $pares\n";
echo "Quantidade de ímpares: $impares\n";
echo "Quantidade divisíveis por 5: $div5\n";
echo "Diferença entre maior e menor: $diferenca\n";
echo "Quantidade de números 3, 6 ou 9: $qtd369\n";
