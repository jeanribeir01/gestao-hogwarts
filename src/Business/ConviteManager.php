<?php

namespace App\Business;

use App\Model\Aluno;
use App\Model\Convite;

class ConviteManager
{
    private array $convitesEnviados = [];

    public function enviarConvite(Aluno $aluno): ?Convite
    {
        $convite = new Convite($aluno);
        $this->convitesEnviados[$aluno->getId()] = $convite;

        $aluno->receberNotificacao(
            "Você foi convidado para Hogwarts! Por favor, confirme o recebimento."
        );
        return $convite;
    }

    public function confirmarConvite(Aluno $aluno): bool
    {
        if (isset($this->convitesEnviados[$aluno->getId()])) {
            $this->convitesEnviados[$aluno->getId()]->confirmar();
            $aluno->receberNotificacao("Seu convite para Hogwarts foi confirmado! Bem-vindo!");
            return true;
        }
        return false;
    }

    public function getRelatorioConvites(): array
    {
        return $this->convitesEnviados;
    }
}