<?php

namespace App\Business;

use App\Model\Professor;
use App\Model\Disciplina;

class ProfessorManager
{
    private array $professores = [];

    public function cadastrarProfessor(string $nome, string $email): Professor
    {
        $professor = new Professor($nome, $email);
        $this->professores[$professor->getId()] = $professor;
        return $professor;
    }

    public function alocarDisciplina(Professor $professor, Disciplina $disciplina): void
    {
        $professor->adicionarDisciplina($disciplina);
    }

    public function getProfessores(): array
    {
        return $this->professores;
    }
}