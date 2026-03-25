<?php

function funcao($celcius){
    return $celcius * 1.8 + 32;


}

$silo = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

for ($i=1; $i <=5 ; $i++) { 
    $num = readline("Informe um numero: ");
    array_push($silo, $num);

}

    foreach($silo as $n){
        $celcius = funcao($n);
        array_push($vetor, $n);
        echo "Fahrenheight = " . $vetor1;
        foreach($vetor as $f){


        }

}
print_r ($vetor1);
