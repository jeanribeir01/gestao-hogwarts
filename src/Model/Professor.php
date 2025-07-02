<?php

namespace App\Model;


use App\Interfaces\PersonInterface;

class Professor implements PersonInterface
{
    private string $id;
    private string $nome;
    private string $email;
    private Disciplina $disciplina;
    private $turmas = [];

    public function __construct(string $id, string $nome, string $email, Disciplina $disciplina)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->disciplina = $disciplina;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDisciplina(): Disciplina
    {
        return $this->disciplina;
    }

    public function adicionarTurma($turma): void
    {
        $this->turmas[] = $turma;
    }

    public function getTurmas(): array
    {
        return $this->turmas;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
