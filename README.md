# Sistema de Gestão de Hogwarts

Este projeto é uma implementação de um Sistema Integrado de Gestão Escolar para a Escola de Magia e Bruxaria de Hogwarts, desenvolvido como atividade da disciplina de Programação Orientada a Objetos. O sistema foi construído em PHP, seguindo o padrão PSR-4 para autoloading e utilizando conceitos fundamentais de OOP.

---

### Integrantes da Equipe

- Abner Rodrigues
- Camila Eduarda
- Cristian Henrique
- Felipe Lima
- Jean Ribeiro Penha
- Luiz Felipe Jordão
- Maria Fernanda
- Samuel Brota
- Samid Giraldello

---

### Descrição dos Módulos Implementados

O sistema é dividido nos seguintes módulos, que trabalham de forma integrada:

-   **Módulo 1: Convite e Cadastro de Alunos:** Automatiza o processo de convite para novos alunos e o acompanhamento da confirmação.
-   **Módulo 2: Seleção de Casas:** Simula a cerimônia do Chapéu Seletor, distribuindo os alunos nas quatro casas (Grifinória, Sonserina, Corvinal e Lufa-Lufa) com base em suas características.
-   **Módulo 3: Gerenciamento de Torneios e Competições:** Permite a criação de torneios, inscrição de participantes e registro de resultados que afetam a pontuação das casas.
-   **Módulo 4: Controle Acadêmico e Disciplinar:** Gerencia o registro de notas, aplicação de bônus e penalidades de pontos para as casas, e consulta de boletins.
-   **Módulo 5: Gerenciamento de Professores e Funcionários:** Centraliza o cadastro de professores e sua alocação em disciplinas.
-   **Módulo 6: Sistema de Alertas e Comunicação:** Fornece um sistema de notificações para alunos e professores.

---

### Instruções de Execução

#### Pré-requisitos
- PHP 8.0 ou superior
- Composer

#### Passos para Execução

1.  **Clonar o repositório:**
    ```bash
    git clone https://github.com/jeanribeir01/gestao-hogwarts.git
    cd gestao-hogwarts
    ```

2.  **Instalar as dependências:**
    O projeto utiliza o autoloader do Composer. Execute o comando abaixo na raiz do projeto para gerar a pasta `vendor`.
    ```bash
    composer install
    ```
    _Caso não tenha o composer.phar localmente, use `php composer.phar install`._

3.  **Executar o sistema:**
    O ponto de entrada do sistema é o arquivo `run.php`. Ele contém uma simulação completa que demonstra o funcionamento de todos os módulos de forma integrada. Para executá-lo, utilize o seguinte comando no seu terminal:
    ```bash
    php run.php
    ```
    A saída no terminal mostrará o passo a passo da execução de cada módulo, desde o envio de convites até a contagem final de pontos das casas.