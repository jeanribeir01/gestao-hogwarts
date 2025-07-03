<?php

namespace App\Business;

use App\Model\Aluno;
use App\Model\Casa;

class SelecaoCasaService
{
    public function selecionarCasaParaAluno(Aluno $aluno, array $casas): void
    {
        $caracteristicas = $aluno->getCaracteristicas();
        $casaSelecionada = null;

        if (in_array('coragem', $caracteristicas)) {
            $casaSelecionada = 'Grifinória';
        } elseif (in_array('astúcia', $caracteristicas)) {
            $casaSelecionada = 'Sonserina';
        } elseif (in_array('inteligência', $caracteristicas)) {
            $casaSelecionada = 'Corvinal';
        } elseif (in_array('lealdade', $caracteristicas)) {
            $casaSelecionada = 'Lufa-Lufa';
        } else {
            $casasDisponiveis = array_keys($casas);
            $casaSelecionada = $casasDisponiveis[array_rand($casasDisponiveis)];
        }

        if (isset($casas[$casaSelecionada])) {
            $casas[$casaSelecionada]->adicionarAluno($aluno);
            echo "\nChapéu Seletor: O aluno {$aluno->getNome()} foi selecionado para a casa {$casaSelecionada}!\n";
        }
    }
}