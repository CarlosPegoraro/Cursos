<?php

    require_once 'Controlador.php';
    //-----------------------------
    //criacao da classe

    class ControleRemoto implements Controlador{
        
        private int $volume;
        private bool $ligado;
        private bool $tocando;

        function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        //---------------------------
        //metodos getters e setters
        
        private function getVolume()
        {
                return $this->volume;
        }

        private function setVolume($volume)
        {
                $this->volume = $volume;

                return $this;
        }
 
        private function getLigado()
        {
                return $this->ligado;
        }

        private function setLigado($ligado)
        {
                $this->ligado = $ligado;

                return $this;
        }

        private function getTocando()
        {
                return $this->tocando;
        }

        private function setTocando($tocando)
        {
                $this->tocando = $tocando;

                return $this;
        }
        //------------------------------------
        //Metodos da classe

        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){
            echo "<br/>Esta ligado?: ";
            if ($this->getLigado()) {
                echo "Sim";
            } else {
                echo "Não";
            }
            //-------------------------
            echo "<br/>Está tocando?: ";
            if ($this->getTocando()) {
                echo "Sim";
            } else {
                echo "Não";
            }
            //-------------------------
            echo "<br/>Volume?: ". $this->getVolume();
            for ($i=0; $i < $this->getVolume(); $i+= 10) { 
                echo "|";
            }
            echo "<br/>";
        }

        public function fecharMenu(){
            echo "<br/>fechando Menu...";
        }

        public function maisVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
            }
        }

        public function menosVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 10);
            }
        }

        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play(){
            if ($this->getLigado() && $this->getTocando() == false) {
                $this->setTocando(true);
            }
        }

        public function pause(){
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }
    

?>