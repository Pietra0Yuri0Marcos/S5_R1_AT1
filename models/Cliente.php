<?php

class Personagem{
    //Atributos
    private $nome;
    private $idade;
    private $genero;
    private $personalidade;
    private $obra;

    //Metodos
    public function __construct($nome, $idade, $genero, $personalidade, $obra)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->personalidade = $personalidade;
        $this->obra = $obra;
    }

    //---

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getPersonalidade()
    {
        return $this->personalidade;
    }

    public function getObra()
    {
        return $this->obra;
    }
}
?>