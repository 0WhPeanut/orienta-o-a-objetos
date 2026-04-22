<?php

class monitor{
//atributos


    public $polegadas;
    public $resolução;
    public $marca;
    public $cor;
    public $voltagem;


//metodos

    function ligar(){
        echo "Monitor Ligado.\n";

    }

    function desligar(){
        echo "Monitor desligado.\n";
    }

    function exibirImagem(){
        echo "Monitor exibindo imagem em " . $this->polegadas . " polegadas.\n";
    }


}


//programa principal

echo "Monitor 1: \n\n";

$monitor1 = new monitor();
$monitor1-> polegadas = 23;
$monitor1-> resolução = "1980x1080";
$monitor1-> marca = "AOC";
$monitor1-> cor = "preto";
$monitor1-> voltagem = 220;

$monitor1->ligar();
$monitor1->exibirImagem();
$monitor1->desligar();

printf("Polegadas: %d | Marca: %s\n", $monitor1->polegadas, $monitor1->marca , "\n\n");

//monitor2

echo "\nMonitor 2: \n\n";

$monitor2 = new monitor();
$monitor2-> polegadas = 25;
$monitor2-> resolução = "1240x860";
$monitor2-> marca = "ACER";
$monitor2-> cor = "prata";
$monitor2-> voltagem = 120;

$monitor2->ligar();
$monitor2->exibirImagem();
$monitor2->desligar();

printf("Polegadas: %d | Marca: %s\n", $monitor2->polegadas, $monitor2->marca);
