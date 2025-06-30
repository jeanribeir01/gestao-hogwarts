<?php

namespace App\Model {


    class Aluno{
        private $id;
        private $nome;
        private $email;
        private $idade;
        private $recebeuConvite;

        public function __construct($nome, $email, $idade)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->idade = $idade;
            $this->recebeuConvite = false;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setRecebeuConvite($status)
        {
            $this->recebeuConvite = $status;
        }

        public function getRecebeuConvite()
        {
            return $this->recebeuConvite;
        }
    }
}
