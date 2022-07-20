<?php

    //requerimento de arquivos
    require_once 'Pessoa11.php';

    //classe
    class AlunoMedio extends Pessoa11 {

        //atributos
        private string $matricula;
        private string $curso;
        private int $mensalidade;

        //---------------
        //construtor
        function __construct(string $nome, int $nascimento, string $sexo, string $matricula, string $curso)
        {   
            $this->setNome($nome);
            $this->setNascimento($nascimento);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
        }

        //metodos da classe

        public function pagarMensalidade()
        {
            if ($this->getSexo() == "FEMININO") {
                $pronome = "da aluna";
            } else {
                $pronome = "do aluno";
            }
            echo "<p>Pagando a mensalidade $pronome {$this->getNome()}, de valor R$ {$this->getMensalidade()}";
        }

        //----------------
        //metodos getters e setters

        public function getMatricula()
        {
                return $this->matricula;
        }

        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        public function getCurso()
        {
                return $this->curso;
        }

        public function setCurso($curso)
        {
                $this->curso = strtoupper($curso);
                $this->calcularMensalidade();
                return $this;
        }

        public function getMensalidade()
        {
                return $this->mensalidade;
        }

        public function calcularMensalidade()
        {
            if ($this->getCurso() == "ACADEMICO") {
                $this->setMensalidade(1200);
            } else {
                $this->setMensalidade(1500);
            }
        }

        public function setMensalidade($mensalidade)
        {
                $this->mensalidade = $mensalidade;

                return $this;
        }
    }

?>