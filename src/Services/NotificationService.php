<?php

namespace App\Services;

use App\Model\Notificacao;

class NotificationService
{
    public function enviar(Notificacao $notificacao): void
    {
        echo "Enviando notificação para: " . $notificacao->getDestinatario() . "\n";
        echo "Mensagem: " . $notificacao->getMensagem() . "\n";
    }
}
