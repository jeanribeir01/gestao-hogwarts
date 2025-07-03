<?php

require_once 'vendor/autoload.php';

use App\Model\{Aluno, Professor, Casa, Disciplina, Torneio, Desafio, Notificacao};
use App\Business\{ConviteManager, SelecaoCasaService, AcademicoManager, ProfessorManager, TorneioManager};

echo "====================================================\n";
echo "INICIALIZANDO SISTEMA DE GESTÃO DE HOGWARTS...\n";
echo "====================================================\n\n";

$conviteManager = new ConviteManager();
$selecaoService = new SelecaoCasaService();
$academicoManager = new AcademicoManager();
$professorManager = new ProfessorManager();
$torneioManager = new TorneioManager();

$casas = [
    'Grifinória' => new Casa('Grifinória'),
    'Sonserina' => new Casa('Sonserina'),
    'Corvinal' => new Casa('Corvinal'),
    'Lufa-Lufa' => new Casa('Lufa-Lufa'),
];

echo "--- [MÓDULO 1: Convites] ---\n";
$aluno1 = new Aluno("Harry Potter", "harry@hogwarts.com");
$aluno2 = new Aluno("Draco Malfoy", "draco@hogwarts.com");
$aluno3 = new Aluno("Luna Lovegood", "luna@hogwarts.com");
$aluno4 = new Aluno("Cedrico Diggory", "cedrico@hogwarts.com");

$conviteManager->enviarConvite($aluno1);
$conviteManager->enviarConvite($aluno2);
$conviteManager->enviarConvite($aluno3);
$conviteManager->enviarConvite($aluno4);

$conviteManager->confirmarConvite($aluno1);
$conviteManager->confirmarConvite($aluno4);

echo "\n> Relatório de Convites:\n";
foreach ($conviteManager->getRelatorioConvites() as $convite) {
    $status = $convite->isConfirmado() ? "CONFIRMADO" : "PENDENTE";
    echo "  - Aluno: {$convite->getAluno()->getNome()} | Status: {$status}\n";
}
echo "\n";

echo "--- [MÓDULO 2: Seleção de Casas] ---\n";
$aluno1->adicionarCaracteristica("coragem");
$aluno2->adicionarCaracteristica("astúcia");
$aluno3->adicionarCaracteristica("inteligência");
$aluno4->adicionarCaracteristica("lealdade");

$selecaoService->selecionarCasaParaAluno($aluno1, $casas);
$selecaoService->selecionarCasaParaAluno($aluno2, $casas);
$selecaoService->selecionarCasaParaAluno($aluno3, $casas);
$selecaoService->selecionarCasaParaAluno($aluno4, $casas);
echo "\n";

echo "--- [MÓDULO 5: Professores e Disciplinas] ---\n";
$profSnape = $professorManager->cadastrarProfessor("Severo Snape", "snape@hogwarts.com");
$profSprout = $professorManager->cadastrarProfessor("Pomona Sprout", "sprout@hogwarts.com");
$disciplinaPocoes = new Disciplina("Poções", $profSnape);
$disciplinaHerbologia = new Disciplina("Herbologia", $profSprout);

$disciplinaPocoes->inscreverAluno($aluno1);
$disciplinaPocoes->inscreverAluno($aluno2);
$disciplinaHerbologia->inscreverAluno($aluno3);
$disciplinaHerbologia->inscreverAluno($aluno4);
echo "Professores e disciplinas configurados.\n\n";

echo "--- [MÓDULO 4: Controle Acadêmico] ---\n";
$academicoManager->registrarNota($aluno1, $disciplinaPocoes, 7.5);
$academicoManager->registrarNota($aluno2, $disciplinaPocoes, 9.0);
$academicoManager->aplicarPenalidade($casas['Grifinória'], 10, "Atraso na aula de Poções");
$academicoManager->aplicarBonus($casas['Sonserina'], 20, "Resposta brilhante na aula de Poções");
$academicoManager->aplicarBonus($casas['Lufa-Lufa'], 15, "Ajuda a um colega na aula de Herbologia");

$academicoManager->consultarBoletim($aluno1);
echo "\n";

echo "--- [MÓDULO 3: Torneios e Competições] ---\n";
$torneioTribruxo = new Torneio("Torneio Tribruxo", "Um torneio perigoso", new DateTime());
$desafioDragao = new Desafio("Enfrentar o Dragão", new DateTime(), "Arena de Duelos");
$torneioTribruxo->adicionarDesafio($desafioDragao);
$torneioTribruxo->inscreverParticipante($aluno1);
$torneioManager->criarTorneio($torneioTribruxo);

$torneioManager->registrarResultadoDesafio($aluno1, $torneioTribruxo, $desafioDragao, 50);
echo "\n";

echo "--- [MÓDULO 6: Alertas e Comunicação] ---\n";
$avisoGeral = new Notificacao(
    "Lembrete: O jantar de boas-vindas será às 19h no Salão Principal.",
    $aluno1
);
$avisoProfessor = new Notificacao(
    "Sua aula de Poções de amanhã foi movida para a masmorra 3.",
    $profSnape
);

$avisoGeral->enviar();
$avisoProfessor->enviar();
echo "\n";

echo "====================================================\n";
echo "PONTUAÇÃO FINAL DAS CASAS\n";
echo "====================================================\n";
foreach($casas as $casa) {
    echo "- Casa {$casa->getNome()}: {$casa->getPontos()} pontos\n";
    if (!empty($casa->getAlunos())) {
        echo "  Alunos: " . implode(', ', array_map(fn($a) => $a->getNome(), $casa->getAlunos())) . "\n";
    } else {
        echo "  Alunos: (Nenhum aluno nesta casa)\n";
    }
}
echo "====================================================\n";