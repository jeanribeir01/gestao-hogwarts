<?php
// Novas modificações 
abstract class Pessoa
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // get dos atributos
    public function getNome(){return $this->nome;}
    
    public function getIdade(){return $this->idade;}

    // set dos atributos 
    public function setNome($nome){$this->nome = $nome;}

    public function setIdade($idade){$this->idade = $idade;}
}
