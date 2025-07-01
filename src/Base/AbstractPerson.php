<?php

namespace App\Base;

abstract class AbstractPerson
{
    protected $nome;
    protected $idade;
    protected $email;

    public function __construct($nome, $idade, $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    // Getters 
    public function getNome(){return $this->nome;}
    public function getIdade(){return $this->idade;}
    public function getEmail(){return $this->email;}

    // Setters 
    public function setNome($nome){$this->nome = $nome;}
    public function setIdade($idade){$this->idade = $idade;}
    public function setEmail($email){$this->email = $email;}

}
