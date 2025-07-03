<?php

namespace App\Model;

use DateTime;

class Convite
{
    private Aluno $aluno;
    private DateTime $dataEnvio;
    private ?DateTime $dataConfirmacao = null;
    private bool $confirmado = false;

    public function __construct(Aluno $aluno)
    {
        $this->aluno = $aluno;
        $this->dataEnvio = new DateTime();
    }

    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    public function getDataEnvio(): DateTime
    {
        return $this->dataEnvio;
    }

    public function getDataConfirmacao(): ?DateTime
    {
        return $this->dataConfirmacao;
    }

    public function isConfirmado(): bool
    {
        return $this->confirmado;
    }

    public function confirmar(): void
    {
        $this->confirmado = true;
        $this->dataConfirmacao = new DateTime();
    }
}