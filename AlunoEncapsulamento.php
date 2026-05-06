<?php

class Aluno{


    private $nome;
    private $nota1;
    private $nota2;

    function media(){

        $dados = "Sua media é " . $this->nota1 + $this->nota2 / 2;
        return $dados;

    }


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

$nota = new Aluno;
$nota-> setNome($nome = readline("Digite seu nome: "));
$nota-> setNota1($endereco = readline("Digite sua nota: "));
$nota-> setNota2($endereco = readline("Digite sua outra nota: "));
echo $nota->media();
