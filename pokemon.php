<?php

class Pokemon {

//atributos
public string $nome;
public string $tipo;
public int $lv;
public int $xp;
public int $hp;
public int $atk;
public int $def;
public int $speed;


//metodos
function batalhar(){
        $ganhar = random_int(1,2);
            if($ganhar === 1){
                echo "Seu pokemon venceu!";
                $this->qtdXp(random_int(5,15));
                $this->hp += 5;
                $this->atk += 10;
                $this->def += 12;
                $this->speed += 8;
            } else {
                echo "Seu pokemon perdeu...";
            }
            
}

function __construct($nome, $tipo, $xp, $hp, $atk, $def, $speed, $lv){

    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->xp = $xp;
    $this->hp = $hp;
    $this->atk = $atk;
    $this->def = $def;
    $this->speed = $speed;
    $this->lv = $lv;


}

function qtdXp($quantidadeXp){

    $this->xp += $quantidadeXp;
    if($this->xp > 15){
        $this->uparLV();
    }
}

function uparLV(){
    $this->lv ++;
    echo "Seu pokemon subiu de lv!";
}

function imprimir(){
    echo "Atributos: \n";
    echo "Nome: " . $this->nome . "\n";
    echo "Tipo: " . $this->tipo . "\n";
    echo "LV: " . $this->lv . "\n";
    echo "HP: " . $this->hp . "\n";
    echo "XP: " . $this->xp . "\n";
    echo "Atk: " . $this->atk . "\n";
    echo "Def: " . $this->def . "\n";
    echo "Speed: " . $this->speed . "\n";
}


}

$pokemon1 = new Pokemon("Wooper", "agua", 0 , 21 , 10 , 10 , 8 , 5);
$pokemon1-> imprimir();
$pokemon1-> batalhar();
$pokemon1-> imprimir();

$pokemon2 = new Pokemon("Bulbassaur", "planta", 0 , 21 , 10 , 10 , 8 , 5);
$pokemon2-> imprimir();
$pokemon1-> batalhar();
$pokemon1-> imprimir();
