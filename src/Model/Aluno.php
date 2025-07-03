<?php

namespace App\Model;

use App\Interfaces\NotifiableInterface;

class Aluno extends AbstractPerson implements NotifiableInterface
{
    private ?Casa $casa = null;
    private array $caracteristicas = [];
    private array $notas = [];

    public function __construct(string $nome, string $email)
    {
        parent::__construct($nome, $email);
    }

    public function getCasa(): ?Casa
    {
        return $this->casa;
    }

    public function setCasa(Casa $casa): void
    {
        $this->casa = $casa;
    }

    public function getCaracteristicas(): array
    {
        return $this->caracteristicas;
    }

    public function adicionarCaracteristica(string $caracteristica): void
    {
        $this->caracteristicas[] = strtolower($caracteristica);
    }

    public function receberNotificacao(string $mensagem): void
    {
        echo "\n[NOTIFICAÇÃO PARA ALUNO: {$this->getNome()}] $mensagem\n";
    }

    public function adicionarNota(string $nomeDisciplina, float $nota): void
    {
        $this->notas[$nomeDisciplina] = $nota;
    }

    public function getBoletim(): array
    {
        return $this->notas;
    }
}