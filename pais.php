<?php

$paises = array();
$time = 0;

function habitantes($paises){
    $soma = 0;

    foreach ($paises as $percorrer){
        $soma += $percorrer["hab"];
    }

    return $soma;
}

print("Vamos coletar dados de 3 países.\n\n");

while ($time < 3){

    $pais = [
        "nome" => readline("Digite o nome do país: "),
        "continente" => readline("Digite o continente: "),
        "hab" => (int) readline("Digite a quantidade de habitantes: ")
    ];

    print("\n");

    $time++;
    array_push($paises, $pais);
}

$total = habitantes($paises);


foreach ($paises as $resultado){
    echo $resultado["nome"]. " - ". $resultado["continente"] ." - ". $resultado["hab"] . "\n";

}
echo "\nTotal de habitantes: $total\n";
