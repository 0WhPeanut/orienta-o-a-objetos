<?php

class Pessoa{


    //atributos

    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    //metodos

    function retornaApresentacao(){

        $dados =  "Olá mundo, sou " . $this->nome;
        $dados .= ", resido no endereço " . $this->endereco;
        $dados .= ", cidade de " . $this->cidade;
        $dados .= ", no estado de " . $this->uf;
        $dados .= ". Minha altura é de " . $this->altura; 
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa = new Pessoa;
$pessoa-> setNome($nome = readline("Digite seu nome: "));
$pessoa-> setEndereco($endereco = readline("Digite seu endereco: "));
$pessoa-> setCidade($cidade = readline("Digite seu cidade: "));
$pessoa-> setUf($uf = readline("Digite seu uf: "));
$pessoa-> setAltura($altura = readline("Digite seu altura: "));
echo $pessoa->retornaApresentacao();
