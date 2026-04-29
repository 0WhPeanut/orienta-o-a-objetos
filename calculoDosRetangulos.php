<?php

class Retangulo{

    public $base;
    public $altura;


    function area(){
        $area = $this->base * $this->altura;
        return $area;

    }

    function perimetro(){
        return $this->base + $this-> base + $this->altura + $this->altura;

    }
}


for ($i=1; $i<= 3 ; $i++) { 

$retangulo = new Retangulo();

$retangulo->base = readline("\nInforme a base: \n");
$retangulo->altura = readline("\nInforme a altura: \n");

$area = $retangulo->area();
echo "A area do retangulo é: " . $area . "\n";
echo "A perimetro do retangulo é: " . $retangulo->perimetro() . "\n";
}
