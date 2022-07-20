<?php

        abstract class Pessoa {
        
        //atributos
        private string $nome;
        private int $nascimento;
        private int $idade;
        private string $sexo;

        //--------------------
        //construtor

        function __construct(string $nome, string $nascimento, string $sexo)
        {
            $this->setNome($nome);
            $this->setNascimento($nascimento);
            $this->setSexo($sexo);
        }

        //-------------------
        //Métodos da classe

        public function fazerAniversario()
        {
            $this->idade = $this->getIdade() + 1;
        }

        public function mostrarDados()
        {
            echo "<p>A pessoa de nome: " . $this->getNome();
            echo " tem " . $this->getIdade() . " Anos";
            echo " e é do sexo " . $this->getSexo();
        }

        //-------------------------
        //metodos getters e setter
        
        //setIdade {date("Y") - $this->getAnoNascimento()}

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade()
        {
                $nascimento = $this->getNascimento();
                $ano = intval(date("Y"));
                $this->idade = $ano - $nascimento;
                return $this;
        }

        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }

        public function getNascimento()
        {
                return $this->nascimento;
        }

        public function setNascimento($nascimento)
        {
                $this->nascimento = $nascimento;
                $this->setIdade();
                return $this;
        }
    }
    

?>