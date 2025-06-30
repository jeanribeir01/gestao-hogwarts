<?php

class Administrador {
    public function listarConvites(array $convites) {
        if (empty($convites)) {
            echo "Nenhum convite no momento\n";
        } else {
            foreach ($convites as $convite) {
                $aluno = $convite->getAluno();
                echo "Aluno: " . $aluno->getNome() . "\n";
                echo "Data de envio: " . $convite->getDataEnvio() . "\n";

                if ($convite->getDataConfirmacao() != null) {
                    echo "Data de confirmação: " . $convite->getDataConfirmacao() . "\n";
                } else {
                    echo "Aluno ainda não confirmou\n";
                }

                echo "----------------------------\n";
            }
        }
    }
}

