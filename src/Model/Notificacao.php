<?php

namespace Model;

use App\Interfaces\NotifiableInterface;
use App\Interfaces\PersonInterface;

class Notificacao
{
    private string $mensagem;
    private NotifiableInterface $destinatario;
    private PersonInterface $remetente;
    private \DateTime $dataEnvio;

    public function __construct(string $mensagem, NotifiableInterface $destinatario, PersonInterface $remetente)
    {
        $this->mensagem = $mensagem;
        $this->destinatario = $destinatario;
        $this->remetente = $remetente;
        $this->dataEnvio = new \DateTime();
    }

    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    public function getDestinatario(): NotifiableInterface
    {
        return $this->destinatario;
    }

    public function setDestinatario(NotifiableInterface $destinatario): void
    {
        $this->destinatario = $destinatario;
    }

    public function getRemetente(): PersonInterface
    {
        return $this->remetente;
    }

    public function setRemetente(PersonInterface $remetente): void
    {
        $this->remetente = $remetente;
    }

    public function getDataEnvio(): \DateTime
    {
        return $this->dataEnvio;
    }

    public function setDataEnvio(\DateTime $dataEnvio): void
    {
        $this->dataEnvio = $dataEnvio;
    }
}