<?php

namespace App\Model;

use App\Interfaces\NotifiableInterface;
use App\Interfaces\PersonInterface;
use DateTime;

class Notificacao
{
    private string $mensagem;
    private NotifiableInterface $destinatario;
    private ?PersonInterface $remetente;

    public function __construct(string $mensagem, NotifiableInterface $destinatario, ?PersonInterface $remetente = null)
    {
        $this->mensagem = $mensagem;
        $this->destinatario = $destinatario;
        $this->remetente = $remetente;
    }

    public function enviar(): void
    {
        $this->destinatario->receberNotificacao($this->mensagem);
    }
}