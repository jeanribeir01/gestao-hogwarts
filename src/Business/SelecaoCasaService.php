<?php

namespace App\Business;

use App\Model\Aluno;

class SelecaoCasaService
{
    public function sugerirCasa(Aluno $aluno): string
    {
        $caracteristicas = $aluno->getCaracteristicas();

        if (in_array('coragem', $caracteristicas)) {
            $casa = 'Grifinória';
        } elseif (in_array('inteligencia', $caracteristicas)) {
            $casa = 'Corvinal';
        } elseif (in_array('lealdade', $caracteristicas)) {
            $casa = 'Lufa-Lufa';
        } elseif (in_array('ambicao', $caracteristicas)) {
            $casa = 'Sonserina';
        } else {
            $casa = 'Indefinida';
        }

        $aluno->setCasa($casa);
        return $casa;
    }
}
