<?php

require_once 'src/Model/Administrador.php';
require_once 'src/Model/Convite.php';
require_once 'src/Model/Aluno.php';
require_once 'src/Model/Pessoa.php';

$novoAluno1 = new Aluno("Luxemburgo Rosa", 47);
$novoAluno2 = new Aluno("Lênin Vladimir", 53);

$novoConvite1 = new Convite($novoAluno1);
$novoConvite2 = new Convite($novoAluno2);

$convites = Convite::getTodosConvites();
$admin = new Administrador();
$admin->listarConvites($convites);

