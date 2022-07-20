<?php

    abstract class Pessoa11 {
        
        //atributos
        private string $nome;
        private int $nascimento;
        private string $sexo;
        private int $idade;

        //-----------------
        //funcao da classe

        public final function fazerAniversario()
        {
            $this->setIdade($this->getIdade() + 1);
        }

        //----------------------
        //getters e setters

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = strtoupper($nome);

                return $this;
        }

        public function getNascimento()
        {
                return $this->nascimento;
        }

        public function setNascimento($nascimento)
        {
                $this->nascimento = $nascimento;
                $this->calcularIdade();
                return $this;
        }

        public function getSexo()
        {
                return $this->sexo;
        }

        public function setSexo($sexo)
        {
                $this->sexo = strtoupper($sexo);

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
            return $this; 
        }

        public function calcularIdade()
        {
            $nas = $this->getNascimento();
            $ano = intval(date("Y"));
            $this->idade = $ano - $nas;
            return $this;
        }
    }
    

?>