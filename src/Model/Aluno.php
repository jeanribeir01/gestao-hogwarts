<?php

namespace App\Model;

use App\Base\AbstractPerson;
use App\Interfaces\NotifiableInterface;

class Aluno extends AbstractPerson implements NotifiableInterface
{
    private string $casa;
    private string $statusConvite;
    private array $caracteristicas;

    public function __construct(string $nome, int $idade, string $email)
    {
        parent::__construct($nome, $idade, $email);
        $this->statusConvite = "enviado"; // padrão ao criar
        $this->caracteristicas = [];
    }

    // Getters
    public function getCasa() {return $this->casa;}
    public function getStatusConvite(){return $this->statusConvite;}
    public function getCaracteristicas(): array{return $this->caracteristicas;}

    // Setters
    public function setCasa(string $casa){$this->casa = $casa;}
    public function setStatusConvite($status){$this->statusConvite = $status;}
    public function setCaracteristicas(array $caracteristicas){$this->caracteristicas = $caracteristicas;}
    
    // Funções
    public function adicionarCaracteristica($caracteristica)
    {$this->caracteristicas[] = $caracteristica;}

    public function confirmarRecebimento()
    {$this->statusConvite = "confirmado";}

    public function receberNotificacao($mensagem)
    {echo "Notificação para {$this->getNome()}: $mensagem\n";}



}
