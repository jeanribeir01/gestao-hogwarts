<?php

namespace App\Model;

class Casa
{
    private string $nome;
    private array $alunos = [];
    private int $pontos = 0;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }

    public function adicionarAluno(Aluno $aluno): void
    {
        $this->alunos[$aluno->getId()] = $aluno;
        $aluno->setCasa($this);
    }

    public function getPontos(): int
    {
        return $this->pontos;
    }

    public function adicionarPontos(int $quantidade): void
    {
        $this->pontos += $quantidade;
    }

    public function removerPontos(int $quantidade): void
    {
        $this->pontos -= $quantidade;
    }
}