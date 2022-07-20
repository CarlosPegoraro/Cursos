<?php

    class Luta {
        
        //Atributos
        private Lutador $desafiado;
        private Lutador $desafiante;
        private int $rounds;
        private bool $aprovada;

        //-------------------
        //Construtor

        function __construct()
        {
            
        }

        //-----------------------------
        //Metodos da Classe

        public function marcarLuta(Lutador $lutador1, Lutador $lutador2)
        {
           if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
                $this->setAprovada(true);
                $this->setDesafiado($lutador1);
                $this->setDesafiante($lutador2);
           } else {
                $this->setAprovada(false);
           }
        }

        public function lutar()
        {
            if ($this->getAprovada()) {
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                        case '0': //empate
                                echo "Empatou!";
                                $this->getDesafiado()->empatarLuta();
                                $this->getDesafiante()->empatarLuta();
                                break;
                        case '1': //Desafiado vence
                                echo "O vencedor foi " . $this->getDesafiado()->getNome();
                                $this->getDesafiado()->ganharLuta();
                                $this->getDesafiante()->perderLuta();
                                break;
                        case '2': //Desafiante vence
                                echo "O vencedor foi " . $this->getDesafiante()->getNome();
                                $this->getDesafiante()->ganharLuta();
                                $this->getDesafiado()->perderLuta();
                                break;   
                }
            } else {
                echo "Luta não pode acontecer";
            }
        }

        //------------------------
        //Métodos especiais

        public function getDesafiado()
        {
                return $this->desafiado;
        }

        public function setDesafiado(Lutador $desafiado)
        {
                $this->desafiado = $desafiado;
                return $this;
        }

        public function getDesafiante()
        {
                return $this->desafiante;
        }

        public function setDesafiante(Lutador $desafiante)
        {
                $this->desafiante = $desafiante;
                return $this;
        }

        public function getRounds()
        {
                return $this->rounds;
        }

        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        public function getAprovada()
        {
                return $this->aprovada;
        }
 
        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }
    

?>