<?php

declare(strict_types=1);

namespace App\Model;

class Pessoa
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
}