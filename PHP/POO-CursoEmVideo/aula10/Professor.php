<?php

    require_once '../aula09/Pessoa.php';

    class Professor extends Pessoa{
        
        //atributos
        private float $salario;
        private string $especialidade;
        private Pessoa $pessoa;

        //--------------------
        //construtor

        function __construct(float $salario, string $especialidade, Pessoa $pessoa)
        {
            $this->setSalario($salario);
            $this->setEspecialidade($especialidade);
            $this->setPessoa($pessoa);
        }

        //-------------------
        //Métodos da classe

        public function receberAumento()
        {
            $this->setSalario($this->getSalario() + 258);
        }

        public function mostrarProfessor()
        {
            echo "<p>Professor: " . $this->getPessoa()->getNome();
            echo " // Idade: " . $this->getPessoa()->getIdade() . " anos";
            echo "<br/>Sexo: " . $this->getPessoa()->getSexo();
            echo " // Matéria: ". $this->getEspecialidade();
            echo "<br/>Salário: R$" . $this->getSalario();
            echo "</p>";
        }

        //-------------------------
        //metodos getters e setter
        
        //setIdade {date("Y") - $this->getAnoespecialidade()}

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }

        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;
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