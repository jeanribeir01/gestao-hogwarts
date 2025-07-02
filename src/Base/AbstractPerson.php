<?php

namespace App\Base;

abstract class AbstractPerson
{
    protected string $nome;
    protected int $idade;
    protected string $email;

    public function __construct($nome, $idade, $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function getNome(): string
    {return $this->nome;}
    public function getIdade(): int
    {return $this->idade;}
    public function getEmail(): string
    {return $this->email;}

    public function setNome($nome){$this->nome = $nome;}
    public function setIdade($idade){$this->idade = $idade;}
    public function setEmail($email){$this->email = $email;}

}
