<?php


namespace App\Models;

use App\Models\Torneio;

class Desafio
{
    private string $descricao;
    private string $data;
    private string $local;
    private string $regras;

    private ?Torneio $torneio = null; // Associação com o torneio

    public function __construct(
        string   $descricao = '',
        string   $data = '',
        string   $local = '',
        string   $regras = '',
        ?Torneio $torneio = null
    )
    {
        $this->descricao = $descricao;
        $this->data = $data;
        $this->local = $local;
        $this->regras = $regras;
        $this->torneio = $torneio;
    }

    // Getters e Setters

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {
        $this->data = $data;
    }

    public function getLocal(): string
    {
        return $this->local;
    }

    public function setLocal(string $local): void
    {
        $this->local = $local;
    }

    public function getRegras(): string
    {
        return $this->regras;
    }

    public function setRegras(string $regras): void
    {
        $this->regras = $regras;
    }

    public function getTorneio(): ?Torneio
    {
        return $this->torneio;
    }

    public function setTorneio(?Torneio $torneio): void
    {
        $this->torneio = $torneio;
    }
}
