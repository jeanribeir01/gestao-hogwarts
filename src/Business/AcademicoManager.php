<?php

namespace App\Business;

use App\Model\Aluno;
use App\Model\Disciplina;
use App\Model\Casa;

class AcademicoManager
{
    public function registrarNota(Aluno $aluno, Disciplina $disciplina, float $nota): void
    {
        $aluno->adicionarNota($disciplina->getNome(), $nota);
        echo "\nNota {$nota} registrada para o aluno {$aluno->getNome()} na disciplina de {$disciplina->getNome()}.\n";
    }

    public function aplicarBonus(Casa $casa, int $pontos, string $motivo): void
    {
        $casa->adicionarPontos($pontos);
        echo "\n{$pontos} pontos adicionados à casa {$casa->getNome()} por: {$motivo}.\n";
    }

    public function aplicarPenalidade(Casa $casa, int $pontos, string $motivo): void
    {
        $casa->removerPontos($pontos);
        echo "\n{$pontos} pontos removidos da casa {$casa->getNome()} por: {$motivo}.\n";
    }

    public function consultarBoletim(Aluno $aluno): void
    {
        echo "\n--- Boletim do Aluno: {$aluno->getNome()} ---\n";
        $notas = $aluno->getBoletim();
        if (empty($notas)) {
            echo "Nenhuma nota registrada.\n";
            return;
        }
        foreach ($notas as $disciplina => $nota) {
            echo "- {$disciplina}: {$nota}\n";
        }
        echo "---------------------------------\n";
    }
}