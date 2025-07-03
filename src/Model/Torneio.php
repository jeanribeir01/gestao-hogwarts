<?php

namespace App\Model;

use DateTime;

class Torneio
{
    private string $nome;
    private string $regras;
    private DateTime $dataInicio;
    private array $desafios = [];
    private array $participantes = [];

    public function __construct(string $nome, string $regras, DateTime $dataInicio)
    {
        $this->nome = $nome;
        $this->regras = $regras;
        $this->dataInicio = $dataInicio;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function adicionarDesafio(Desafio $desafio): void
    {
        $this->desafios[] = $desafio;
    }

    public function getDesafios(): array
    {
        return $this->desafios;
    }

    public function inscreverParticipante(Aluno $aluno): void
    {
        $this->participantes[$aluno->getId()] = $aluno;
    }

    public function getParticipantes(): array
    {
        return $this->participantes;
    }
}