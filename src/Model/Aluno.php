<?php

namespace App\Model;

use App\Base\AbstractPerson;
use App\Interfaces\NotifiableInterface;
use App\Interfaces\PersonInterface;

class Aluno extends AbstractPerson implements NotifiableInterface, PersonInterface
{
    private string $id;
    private string $casa;
    private string $statusConvite;
    private array $caracteristicas;

    public function __construct(string $id, string $nome, int $idade, string $email)
    {
        parent::__construct($nome, $idade, $email);
        $this->statusConvite = "enviado";
        $this->caracteristicas = [];
    }

    public function getCasa(): string
    {return $this->casa;}
    public function getStatusConvite(): string
    {return $this->statusConvite;}
    public function getCaracteristicas(): array{return $this->caracteristicas;}

    public function setCasa(string $casa): void
    {$this->casa = $casa;}
    public function setStatusConvite($status): void
    {$this->statusConvite = $status;}
    public function setCaracteristicas(array $caracteristicas): void
    {$this->caracteristicas = $caracteristicas;}

    public function adicionarCaracteristica($caracteristica): void
    {$this->caracteristicas[] = $caracteristica;}

    public function confirmarRecebimento(): void
    {$this->statusConvite = "confirmado";}

    public function receberNotificacao($mensagem): void
    {echo "Notificação para {$this->getNome()}: $mensagem\n";}

    public function getId() : string
    {
        return $this->id;
    }
}
