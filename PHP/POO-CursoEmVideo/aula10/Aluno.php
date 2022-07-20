<?php

    require_once '../aula09/Pessoa.php';

    class Aluno extends Pessoa{
        
        //atributos
        private int $matricula;
        private string $curso;
        private Pessoa $pessoa;

        //--------------------
        //construtor

        function __construct(int $matricula, string $curso, Pessoa $pessoa)
        {
            $this->setMatricula($matricula);
            $this->setCurso($curso);
            $this->setPessoa($pessoa);
        }

        //-------------------
        //Métodos da classe

        public function cancelarMatricula()
        {
            $this->setMatricula(0);
        }

        public function mostrarAluno()
        {
            echo "<p>Aluno: " . $this->getPessoa()->getNome();
            echo " // Matricula: ";
            if ($this->getMatricula() == 0) {
                echo "Não matriculado";
            } else {
                echo $this->getMatricula();
            }
            echo " // Idade: " . $this->getPessoa()->getIdade() . " Anos";
            echo "<br/>Sexo: " . $this->getPessoa()->getSexo();
            echo " // Curso: ";
            if ($this->getMatricula() == 0) {
                echo "Não esta cursando nunhum curso";
            } else {
                echo $this->getCurso();
            }
            echo "</p>";
        }

        //-------------------------
        //metodos getters e setter
        
        //setIdade {date("Y") - $this->getAnocurso()}

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
                $this->curso = $curso;
                return $this;
        }

        public function getPessoa()
        {
                return $this->pessoa;
        }

        public function setPessoa($pessoa)
        {
                $this->pessoa = $pessoa;

                return $this;
        }
    }

?>