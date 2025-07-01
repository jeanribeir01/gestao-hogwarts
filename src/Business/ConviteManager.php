<?php

namespace App\Business;

use App\Model\Aluno;
use App\Model\Convite;

class ConviteManager
{
    public function enviarConvite(Aluno $aluno): ?Convite
    {
        $convite = new Convite($aluno);
        if ($aluno->getIdade() >= 11) {
            echo "Convite enviado para: " . $aluno->getNome() . "\n";
            return $convite;
        }
        return null;
    }

    public function acompanharRespostas(array $alunos)
    {
        $convites = Convite::getTodosConvites();
        echo "Acompanhamento de Respostas:\n";
        echo "----------------------------\n";
        foreach ($convites as $convite) {
            $aluno = $convite->getAluno();
            echo "Aluno: " . $aluno->getNome() . "\n";
            echo "Data de envio: " . $convite->getDataEnvio() . "\n";

            if ($convite->getDataConfirmacao() != null) {
                echo "Status: Confirmado em " . $convite->getDataConfirmacao() . "\n";
            } else {
                echo "Status: Aguardando confirmação\n";
            }
            echo "----------------------------\n";
        }
    }
}