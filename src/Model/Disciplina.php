<?php
namespace App\Model;

    class Disciplina
    {
        private string $nome;
        private Professor $professor;
        private array $turma = [];


        public function __construct(string $nome, Professor $professor)
        {
            $this->nome = $nome;
            $this->professor = $professor;
        }


        public function getNome(): string
        {
            return $this->nome;
        }

        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }


        public function getProfessor(): Professor
        {
            return $this->professor;
        }

        public function setProfessor(Professor $professor): void
        {
            $this->professor = $professor;
        }


        public function getTurma(): array
        {
            return $this->turma;
        }

        public function setTurma(array $turma): void
        {
            foreach ($turma as $aluno) {
                if (!$aluno instanceof Aluno) {
                    throw new \InvalidArgumentException('Todos os itens da turma devem ser instâncias de Aluno.');
                }
            }
            $this->turma = $turma;
        }

        public function adicionarAluno(Aluno $aluno): void
        {
            $this->turma[] = $aluno;
        }

        public function removerAluno(Aluno $aluno): void
        {
            $this->turma = array_filter($this->turma, function ($a) use ($aluno) {
                return $a !== $aluno;
            });
        }

}