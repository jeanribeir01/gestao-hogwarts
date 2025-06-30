<?php

// Classe convite responsavel somente por mandar os convites 
// E confirmar o recebimento 

class Convite {
    protected $aluno;
    protected $dataEnvio;
    protected $dataConfirmacao = null;

    // Atributo estatico que vai armazenar todos os convites  
    protected static $convites = [];

    // Atributos com metodo Get para a classe adminstrador poder ver eles 

    public function getAluno() {return $this->aluno;}

    public function getDataEnvio() {return $this->dataEnvio;}

    public function getDataConfirmacao() {return $this->dataConfirmacao;}

    public static function getTodosConvites() {return self::$convites;}

    // Metodo construtor que ja faz a validação da idade do Aluno 
    public function __construct($aluno) {
        if ($aluno->getIdade() < 11) {
            echo "Essa pessoa não possui a idade mínima para receber o convite\n";
        }
        $this->aluno = $aluno;
        $this->dataEnvio = date("Y-m-d H:i:s");
        self::$convites[] = $this;

    }
    
    // Metodo de gerar conteudo personalizado para cada aluno  
    public function gerarConteudo() {
        echo "Prezado(a) {$this->aluno->getNome()}, você completou a idade mínima " . 
        "e está oficialmente convidado(a) a ingressar em Hogwarts! " .
        "Prepare sua varinha, caldeirão, túnica e livros, " .
        "favor esperar na Plataforma 9¾!\n";
    }
    
    public function confirmacao() {
        $this->dataConfirmacao = date("Y-m-d H:i:s");
    }

}


