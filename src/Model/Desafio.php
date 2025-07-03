<?php

namespace App\Model;

use DateTime;

class Desafio
{
    private string $descricao;
    private DateTime $data;
    private string $local;

    public function __construct(string $descricao, DateTime $data, string $local)
    {
        $this->descricao = $descricao;
        $this->data = $data;
        $this->local = $local;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}