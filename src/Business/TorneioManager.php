<?php

namespace App\Business;

use App\Model\Torneio;
use App\Model\Desafio;
use App\Model\Aluno;

class TorneioManager
{
    private array $torneios = [];

    public function criarTorneio(Torneio $torneio): void
    {
        $this->torneios[$torneio->getNome()] = $torneio;
    }

    public function registrarResultadoDesafio(Aluno $aluno, Torneio $torneio, Desafio $desafio, int $pontosGanhos): void
    {
        if ($aluno->getCasa()) {
            $casa = $aluno->getCasa();
            $casa->adicionarPontos($pontosGanhos);
            echo "\nO aluno {$aluno->getNome()} da casa {$casa->getNome()} ganhou {$pontosGanhos} pontos no desafio '{$desafio->getDescricao()}' do torneio '{$torneio->getNome()}'!\n";
        }
    }

    public function getTorneios(): array
    {
        return $this->torneios;
    }
}