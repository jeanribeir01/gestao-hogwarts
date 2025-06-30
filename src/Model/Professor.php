<?php

namespace App\Model;


class Professor
{
    private $id;
    private $nome;
    private $email;
    private $disciplina;
    private $turmas = [];

    public function __construct($nome, $email, $disciplina)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->disciplina = $disciplina;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDisciplina()
    {
        return $this->disciplina;
    }

    public function adicionarTurma($turma)
    {
        $this->turmas[] = $turma;
    }

    public function getTurmas()
    {
        return $this->turmas;
    }
}
