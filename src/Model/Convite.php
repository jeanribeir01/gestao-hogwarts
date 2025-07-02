<?php

namespace App\Model;

class Convite
{
    protected Aluno $aluno;
    protected string $dataEnvio;
    protected string $dataConfirmacao;
    protected static $convites = [];

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

    public function getAluno(): Aluno
    { return $this->aluno; }
    public function getDataEnvio(): string
    { return $this->dataEnvio; }
    public function getDataConfirmacao(): string
    { return $this->dataConfirmacao; }
    public static function getTodosConvites(): array
    { return self::$convites; }

    public function gerarConteudo(): void
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

    public function confirmarRecebimento(): void
    {
    $this->dataConfirmacao = date("Y-m-d H:i:s");
    $this->aluno->confirmarRecebimento(); 
    }

}
