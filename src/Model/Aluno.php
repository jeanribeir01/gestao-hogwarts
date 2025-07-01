<?php

namespace App\Model;

use App\Model\Pessoa;

class Aluno extends Pessoa
{
    protected $casa;
    protected $recebeuConvite = false;
    protected $id;
    protected $email;

    public function __construct($nome, $idade){ parent::__construct($nome, $idade); }

    public function confirmarConvite(){ $this->recebeuConvite = true; }
}
