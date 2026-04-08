<?php

$retangulos = array();

function calculo($retangulo){
    $area = $retangulo["base"] * $retangulo["altura"];
    return $area;
    }

    for ($i=0; $i <= 4 ; $i++) { 
        $retangulo["base"] = readline("Informe a base de um retangulo: ");
        $retangulo["altura"] = readline("Informe a altura de um retangulo: ");

        array_push($retangulos, $retangulo);
}

foreach($retangulos as $spamtom){
    $area = calculo($retangulos);
    calculo($retangulos);

}
print("\n");
