<?php

namespace App\Model;

use App\Interfaces\PersonInterface;

abstract class AbstractPerson implements PersonInterface
{
    protected int $id;
    protected string $nome;
    protected string $email;

    public function __construct(string $nome, string $email)
    {
        $this->id = rand(1000, 9999);
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}