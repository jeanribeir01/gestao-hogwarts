<?php

namespace App\Model;

use App\Model\Aluno;

class Convite
{
    protected $aluno;
    protected $dataEnvio;
    protected $dataConfirmacao = null;
    protected static $convites = [];

    // Função construtora 
    public function __construct($aluno)
    {
        if ($aluno->getIdade() < 11) {
            echo "Essa pessoa não possui a idade mínima para receber o convite\n";
            return;
        }

        $this->aluno = $aluno;
        $this->dataEnvio = date("Y-m-d H:i:s");
        self::$convites[] = $this;
    }

    // Getters 
    public function getAluno() { return $this->aluno; }
    public function getDataEnvio() { return $this->dataEnvio; }
    public function getDataConfirmacao() { return $this->dataConfirmacao; }
    public static function getTodosConvites() { return self::$convites; }

    // Funções 
    public function gerarConteudo() 
    {

    $nome = $this->aluno->getNome();
    $email = $this->aluno->getEmail();
    $dataEnvio = $this->dataEnvio;
    $status = $this->dataConfirmacao ? "Aluno confirmou o recebimento" : "Aluno ainda não confirmou";

    echo "----------------------------------------\n";
    echo " Convite Oficial para Hogwarts\n";
    echo "----------------------------------------\n";
    echo "Prezado(a) $nome,\n\n";
    echo "Parabéns! Você atingiu a idade mínima necessária\n";
    echo "e está oficialmente convidado(a) a ingressar em\n";
    echo "Hogwarts, a escola de magia e bruxaria.\n\n";
    echo "Prepare sua varinha, caldeirão, túnica e livros.\n";
    echo "Aguarde na Plataforma 9¾ na data que será enviada\n";
    echo "para o e-mail cadastrado: $email\n\n";
    echo "----------------------------------------\n";
    echo "Aluno: $nome\n";
    echo "Data de envio: $dataEnvio\n";
    echo "$status\n";
    echo "----------------------------------------\n\n";
    }

    public function confirmarRecebimento()
    {
    $this->dataConfirmacao = date("Y-m-d H:i:s");
    $this->aluno->confirmarRecebimento(); 
    }

}
