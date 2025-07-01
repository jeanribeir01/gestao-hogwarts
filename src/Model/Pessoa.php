<?php

namespace App\Model;

abstract class Pessoa
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() { return $this->nome; }
    public function getIdade() { return $this->idade; }

    public function setNome($nome) { $this->nome = $nome; }
    public function setIdade($idade) { $this->idade = $idade; }
}
