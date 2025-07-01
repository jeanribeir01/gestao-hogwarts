<?php
// Novas modificações 
require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    protected $casa;
    protected $recebeuConvite = false;

    public function __construct ($nome, $idade){
        parent::__construct($nome,$idade);
    }

    public function confirmarConvite()
    {
        $this->recebeuConvite = true;
    }
}


