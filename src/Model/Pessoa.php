<?php

declare(strict_types=1);

namespace App\Model;

class Pessoa
{
<<<<<<< Updated upstream
    private $nome;
    private $numero;
=======
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
>>>>>>> Stashed changes
}