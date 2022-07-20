<?php

    require_once 'Publicacao.php';
    class Livro implements Publicacao {
        
        //atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //---------------
        //construtor

        function __construct(string $titulo, string $autor, int $totPaginas, Pessoa $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setAberto(false);
            $this->setPagAtual(0);
        }

        //--------------------------
        //metodos da interface

        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear($pag) {
            if ($pag > $this->getPagAtual()) {
                $this->setPagAtual($pag);
            } else {
                $this->setPagAtual(0);
            }
        }
        public function avancarPagina() {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        public function voltarpagina() {
            $this->setPagAtual($this->getPagAtual() - 1);
        }

        //--------------------
        //metodos da classe

        public function detalhes()
        {
            echo "<p>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
            echo "<br>Ele tem " . $this->getTotPaginas() . " páginas";
            echo "<br>Ele está ";
            if ($this->getAberto()) {
                echo "aberto";
            } else {
                echo "fechado";
            }
            echo " e está na página " . $this->getPagAtual();
            echo "<br>Sendo lido por " . $this->getLeitor()->getNome() . "</p>";
        }

        //---------------------
        //metodos getters e setters
 
        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }

        public function getAberto()
        {
                return $this->aberto;
        }

        public function setAberto($aberto)
        {
                $this->aberto = $aberto;

                return $this;
        }

        public function getLeitor()
        {
                return $this->leitor;
        }

        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;

                return $this;
        }
    }
    

?>