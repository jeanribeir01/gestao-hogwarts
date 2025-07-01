<?php

// Métodos adicionados:

// Convite {
// gerarConteudo() -> Serve para criar uma carta personalizada 
// confirmacao() -> Muda o status de confirmação de um aluno 
// }

// Administrador {
// listarConvites() -> Mostra todos os convites enviados 
// }

require_once 'src/Interfaces/NotifiableInterface.php';
require_once 'src/Base/AbstractPerson.php';
require_once 'src/Model/Aluno.php';
require_once 'src/Model/Administrador.php';
require_once 'src/Model/Convite.php';


use App\Model\Aluno;
use App\Model\Administrador;
use App\Model\Convite;

$novoAluno1 = new Aluno("Luxemburgo Rosa", 47, "rosalinda@gmail.com");
$novoAluno2 = new Aluno("Lênin Vladimir", 53, "Leninho123@gmail.com");

$novoConvite1 = new Convite($novoAluno1);
$novoConvite2 = new Convite($novoAluno2);

$convites = Convite::getTodosConvites();
$admin = new Administrador();
$admin->listarConvites($convites);
