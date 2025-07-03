<?php

namespace App\Model;

use Models\Desafio;
use Models\Aluno;

class Torneio
{
    private string $nome;
    private string $regras;
    private DateTime $dataInicio;
    private DateTime $dataFim;
    private array $desafios = [];
    private array $participantes = [];

    public function __construct(string $nome, string $regras, DateTime $dataInicio, DateTime $dataFim)
    {
        $this->nome = $nome;
        $this->regras = $regras;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function getRegras(): string
    {
        return $this->regras;
    }

    public function getDataInicio(): DateTime
    {
        return $this->dataInicio;
    }

    public function getDataFim(): DateTime
    {
        return $this->dataFim;
    }

    public function getDesafios(): array
    {
        return $this->desafios;
    }

    public function getParticipantes(): array
    {
        return $this->participantes;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setRegras(string $regras): void
    {
        $this->regras = $regras;
    }

    public function setDataInicio(DateTime $dataInicio): void
    {
        $this->dataInicio = $dataInicio;
    }

    public function setDataFim(DateTime $dataFim): void
    {
        $this->dataFim = $dataFim;
    }


    public function adicionarDesafio(Desafio $desafio): void
    {
        $this->desafios[] = $desafio;
    }

    public function inscreverAluno(Aluno $aluno): void
    {
        
        if (!in_array($aluno, $this->participantes, true)) {
            $this->participantes[] = $aluno;
        }
    }
}
