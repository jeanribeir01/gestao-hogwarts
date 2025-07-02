<?php

namespace App\Model;

use App\Interfaces\PersonInterface;

abstract class AbstractPerson implements PersonInterface
{
    protected int $id;
    protected string $nome;

    public function __construct(string $nome, int $id = null)
    {
        $this->nome = $nome;
        $this->id = $id ?? rand(1, 99999);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
