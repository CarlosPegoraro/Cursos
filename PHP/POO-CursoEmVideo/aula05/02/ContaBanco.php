<?php 

    class ContaBanco
    {
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso</p>";
        }

        //--------------------------------
        //Metodos getters e settes
        
        public function getNumConta()
        {
                return $this->numConta;
        }

        public function setNumConta($numConta)
        {
                $this->numConta = $numConta;

                return $this;
        }

        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        public function getDono()
        {
                return $this->dono;
        }

        public function setDono($dono)
        {
                $this->dono = $dono;

                return $this;
        }

        public function getSaldo()
        {
                return $this->saldo;
        }

        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }

        public function getStatus()
        {
                return $this->status;
        }

        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        //---------------------------------
        //Metodos

        public function abrirConta($t, $d, $c)
        {
            $this->setTipo($t);
            $this->setDono($d);
            $this->setNumConta($c);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta()
        {
            if ($this->getSaldo() > 0) {
                echo "<p>Conta ainda possue dinheiro</p>";
            } elseif ($this->getSaldo() < 0 ) {
                echo "<p>A conta está em débito</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($v)
        {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
            } else {
                echo "<p>Conta fechada, não é possível depositar</p>";
            }
        }

        public function sacar($v)
        {
            if ($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque autorizado na conta do titular {$this->getDono()}</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            } else {
                echo "<p>não posso sacar de uma conta fechada</p>";
            }
        }

        public function pagarMensal()
        {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }

            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Problemas com a conta, não posso pagar</p>";
            }
        }
    }
    

?>