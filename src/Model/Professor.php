<?php

namespace App\Model;

use App\Interfaces\NotifiableInterface;
use DateTime;

class Professor extends AbstractPerson implements NotifiableInterface
{
    private array $disciplinas = [];
    private array $cronograma = [];

    public function __construct(string $nome, string $email)
    {
        parent::__construct($nome, $email);
    }

    public function adicionarDisciplina(Disciplina $disciplina): void
    {
        $this->disciplinas[$disciplina->getNome()] = $disciplina;
    }

    public function getDisciplinas(): array
    {
        return $this->disciplinas;
    }

    public function receberNotificacao(string $mensagem): void
    {
        echo "\n[NOTIFICAÇÃO PARA PROFESSOR: {$this->getNome()}] $mensagem\n";
    }

    public function adicionarHorario(string $dia, string $hora, string $disciplina, string $turma): void
    {
        $this->cronograma[] = [
            'dia' => $dia,
            'hora' => $hora,
            'disciplina' => $disciplina,
            'turma' => $turma
        ];
    }

    public function getCronograma(): array
    {
        return $this->cronograma;
    }
}