<?php

    require_once '../aula09/Pessoa.php';

    class Funcionario extends Pessoa{
        
        //atributos
        private bool $trabalhando;
        private string $trabalho;
        private string $setor;
        private float $salario;
        private Pessoa $funcionario;

        //--------------------
        //construtor

        function __construct(Pessoa $pessoa)
        {
            $this->setTrabalhando(false);
            $this->setTrabalho("Desempregado");
            $this->setSetor("Não possue");
            $this->setSalario(0);
            $this->setFuncionario($pessoa);
        }

        //-------------------
        //Métodos da classe

        public function ficarDesempregado()
        {
            $this->setTrabalhando(false);
            $this->setTrabalho("Desempregado");
            $this->setSetor("Sem setor");
            $this->setSalario(0);
        }

        public function arrumarEmprego($trabalho, $setor, $salario)
        {
            $this->setTrabalhando(true);
            $this->setTrabalho($trabalho);
            $this->setSetor($setor);
            $this->setSalario($salario);
        }

        public function mostrarFuncionario()
        {
            echo "<p>Funcionário: " . $this->getFuncionario()->getNome();
            echo " // Idade: " . $this->getFuncionario()->getIdade() . " anos";
            echo "<br/>Sexo: " . $this->getFuncionario()->getSexo();
            echo " // Trabalhando: ";
            if ($this->getTrabalhando()) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "<br/>Trabalho: " . $this->getTrabalho();
            echo " // Setor: " . $this->getSetor();
            echo "<br/>Salário: " . $this->getSalario();
            echo "</p>";
        }

        //-------------------------
        //metodos getters e setter

        public function getTrabalhando()
        {
                return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando)
        {
                $this->trabalhando = $trabalhando;

                return $this;
        }

        public function getTrabalho()
        {
                return $this->trabalho;
        }

        public function setTrabalho($trabalho)
        {
                $this->trabalho = $trabalho;

                return $this;
        }

        public function getSetor()
        {
                return $this->setor;
        }

        public function setSetor($setor)
        {
                $this->setor = $setor;

                return $this;
        }

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
 
        public function getFuncionario()
        {
                return $this->funcionario;
        }

        public function setFuncionario($funcionario)
        {
                $this->funcionario = $funcionario;

                return $this;
        }
    }

?>