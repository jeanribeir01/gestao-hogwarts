<?php

namespace App\Business;

use App\Model\Aluno;
use App\Model\Disciplina;
use App\Model\Casa;

class AcademicoManager
{
    private array $notas = [];
    private array $penalidades = [];

    public function registrarNota(Aluno $aluno, Disciplina $disciplina, float $nota): void
    {
        $this->notas[$aluno->getId()][$disciplina->getId()] = $nota;
    }

    public function aplicarPenalidade(Casa $casa, int $pontos): void
    {
        if (!isset($this->penalidades[$casa->getNome()])) {
            $this->penalidades[$casa->getNome()] = 0;
        }
        $this->penalidades[$casa->getNome()] += $pontos;
    }

    public function getNotas(): array
    {
        return $this->notas;
    }

    public function getPenalidades(): array
    {
        return $this->penalidades;
    }
}
