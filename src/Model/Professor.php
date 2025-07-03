<?php

namespace GestaoHogwarts\Models;

use GestaoHogwarts\Base\AbstractPerson;
use GestaoHogwarts\Interfaces\NotifiableInterface;

class Professor extends AbstractPerson implements NotifiableInterface
{
    private array $disciplinas;
    private ?Cronograma $cronograma;

    public function __construct(string $nome, string $email)
    {
        parent::__construct($nome, $email);
        $this->disciplinas = [];
        $this->cronograma = null;
    }

    public function adicionarDisciplina(Disciplina $disciplina): void
    {
        $this->disciplinas[] = $disciplina;
    }

    public function getDisciplinas(): array
    {
        return $this->disciplinas;
    }

    public function setDisciplinas(array $disciplinas): void
    {
        $this->disciplinas = $disciplinas;
    }

    public function getCronograma(): ?Cronograma
    {
        return $this->cronograma;
    }

    public function setCronograma(Cronograma $cronograma): void
    {
        $this->cronograma = $cronograma;
    }

    public function enviarNotificacao(string $mensagem): void
    {
        echo "Notificando Professor {$this->getNome()}: \"{$mensagem}\"\n";
    }
}