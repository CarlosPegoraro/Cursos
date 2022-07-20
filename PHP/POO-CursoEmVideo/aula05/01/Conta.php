<?php

      class Conta
      {
            public int $numConta;
            private string $dono;
            protected string $tipo;
            protected string $modelo;
            private int $saldo;
            private bool $status;
        
            function __construct(string $dono, int $numConta)
            {
                $this->dono = $dono;
                $this->numConta = $numConta;
                $this->saldo = 0;
                $this->status = false;
                $this->modelo = "genérico";
                $this->tipo = "genérico";
            }
            //----------------------------------------------------
            //funcoes fundamentais

            public function abrirConta($tipo)
            {
                if ($this->status == false) {
                    //----------------
                    $this->status = true;
                    $this->tipo = $tipo;
                    //-------------------
                    if ($tipo == "cc") {
                        //------------------
                        $this->saldo += 50;
                        return $this->saldo;
                        //------------------
                        return $this->tipo;
                        //--------------------
                    } elseif ($tipo == "cp") {
                        //----------------
                        $this->saldo += 150;
                        return $this->saldo;
                        //--------------------
                        return $this->tipo;
                    } else {
                        echo "Não existe esse tipo de conta, selecione cc para conta corrente ou cp para conta popança.";
                    }
                    
                } else {
                    echo "A conta já esta aberta.";
                }
            }
            //-----------------------------------------------

            public function fecharConta()
            {
                if ($this->status == true) {
                    if ($this->saldo > 0) {
                        echo "Favor sacar o dinheiro restante na conta: {$this->saldo} reais restantes.";
                    } else {
                        $this->status = false;
                        return $this->status;
                    }
                } else {
                    echo "A conta já esta fechada.";
                }
            }

            //------------------------------------------

            public function depositar($deposito)
            {
                if ($this->status == true) {
                    $this->saldo += $deposito;
                    echo "o valor depositado foi de $deposito reais, o novo saldo é de {$this->saldo} reais.";
                    return $this->saldo;
                } else {
                    echo "A conta esta fechada.";
                }
            }

            public function sacar($saque)
            {
                if ($this->status == true) {
                    $this->saldo -= $saque;
                    if ($this->saldo < 0) {
                        echo "Você não pode sacar esse valor, pois seu saldo ficará negativo.";
                    } else {
                        echo "O valor sacado foi de $saque reais, seu saldo atual é de {$this->saldo} reais.";
                        return $this->saldo;
                    }
                } else {
                    echo "A conta está fechada.";
                }
            }

            public function pagarMensalidade()
            {
                if ($this->status == true) {
                    if ($this->tipo == "cc") {
                        $this->saldo -= 12;
                    } elseif ($this->tipo == "cp") {
                        $this->saldo -= 20;
                    }
                }
            }

            //---------------------------------------------------
            //funcoes abstratas

            public function pularLinha()
            {
                echo "<br/><br/>";
            }

            public function escrever()
            {
                if ($this->tipo == "cc") {
                    $this->modelo = "Conta Corrente";
                } elseif ($this->tipo == "cp") {
                    $this->modelo = "Conta Popança";
                } else {
                    return $this->modelo;
                }
                echo "<br/>A conta {$this->numConta} do tipo {$this->modelo}, pertencente ao titular de nome {$this->dono}, tem saldo {$this->saldo} reais.<br/>";
            }
            //---------------------------------------------------
            //funcoes Getters e Setters

            public function getNumConta()
            {
                return $this->numConta;
            }

            public function setNumConta($numConta)
            {
                $this->numConta = $numConta;

                return $this;
            }
            //---------------------------------
            public function getDono()
            {
                return $this->dono;
            }

            public function setDono($dono)
            {
                $this->dono = $dono;
                return $this;
            }
            //---------------------------------
            public function getTipo()
            {
                return $this->tipo;
            }

            public function setTipo($tipo)
            {
                $this->tipo = $tipo;
                return $this;
            }
            //---------------------------------
            public function getModelo()
            {
                return $this->modelo;
            }
            
            public function setModelo($modelo)
            {
                $this->modelo = $modelo;
                return $this;
            }
            //---------------------------------
            public function getSaldo()
            {
                return $this->saldo;
            }

            public function setSaldo($saldo)
            {
                $this->saldo = $saldo;
                return $this;
            }
            //---------------------------------
            public function getStatus()
            {
                return $this->status;
            }

            public function setStatus($status)
            {
                $this->status = $status;
                return $this;
            }
      }
        

?>