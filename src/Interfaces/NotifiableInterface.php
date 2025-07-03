<?php

namespace App\Interfaces;

interface NotifiableInterface
{
    public function receberNotificacao(string $mensagem): void;
}