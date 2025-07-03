<?php

namespace App\Model;

class Disciplina
{
    private string $nome;
    private Professor $professor;
    private array $alunosInscritos = [];

    public function __construct(string $nome, Professor $professor)
    {
        $this->nome = $nome;
        $this->professor = $professor;
        $professor->adicionarDisciplina($this);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getProfessor(): Professor
    {
        return $this->professor;
    }

    public function inscreverAluno(Aluno $aluno): void
    {
        $this->alunosInscritos[$aluno->getId()] = $aluno;
    }

    public function getAlunosInscritos(): array
    {
        return $this->alunosInscritos;
    }
}