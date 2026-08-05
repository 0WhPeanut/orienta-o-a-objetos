<?php

require_once("modelo/atleta.php");
require_once("modelo/pais.php");

$atletas = [];

do{

echo" - MENU - \n";
echo"1. Cadastrar atleta\n";
echo"2. Excluir atleta\n";
echo"3. Listar atletas\n";
echo"0. Sair\n";

$opcao = readline("Escolha uma opcao: ");

switch ($opcao) {

    case 1:
        echo "Cadastrar atleta\n";
        $atleta = new Atleta;
        $atleta->setNome(readline("Escreva seu nome: "));
        $atleta->setIdade(readline("Escreva sua idade: "));
        $atleta->setEsporte(readline("Qual esporte voce pratica?: "));
        
        $pais = new Pais;
        $pais->setContinente(readline("Em qual continente fica?:"));
        $pais->setNome(readline("De qual pais voce é?: "));
        $atleta->setPais($pais);

        array_push($atletas, $atleta);
        
        break;

    case 2:
        echo "\n";
            $indice = readline("Digite o atleta que deseja deletar: ");
            if($indice >= 0 and $indice < count($atletas)) {
                array_splice($atletas, $indice, 1);
                echo "Atleta ecluido\n";
            }
            else {echo "Indice invalido";
            }

        break;

        case 3:
        echo "\n=== Lista de Atletas ===\n";

    if (count($atletas) == 0) {
        echo "Nenhum atleta cadastrado.\n";
    } else {
        foreach ($atletas as $indice => $atleta) {
            echo "Índice: $indice\n";
            echo "Nome: " . $atleta->getNome() . "\n";
            echo "Idade: " . $atleta->getIdade() . "\n";
            echo "Esporte: " . $atleta->getEsporte() . "\n";
            echo "País: " . $atleta->getPais()->getNome() . "\n";
            echo "Continente: " . $atleta->getPais()->getContinente() . "\n";
            echo "-------------------------\n";
        }
    }

    break;

    case 0:
        echo "Saindo\n";
        break;

    default:
        echo "Opção inválida\n";
}



}while ($opcao != 0 );
