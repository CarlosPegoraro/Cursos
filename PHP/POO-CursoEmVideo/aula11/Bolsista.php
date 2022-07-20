<?php

    //requerimento de arquivos
    require_once 'AlunoMedio.php';

    //classe
    class Bolsista extends AlunoMedio {

        //atributos
        private AlunoMedio $aluno;
        private int $bolsa;
        private int $desconto;

        //---------------
        //construtor
        function __construct(AlunoMedio $aluno, int $bolsa)
        {   
            $this->setAluno($aluno);
            $this->setBolsa($bolsa);
        }

        //metodos da classe

        public function renovarBolsa()
        {
            echo "<p>bolsa renovada com sucesso!</p>";
        }

        public function pagarMensalidade()
        {
            $this->setDesconto();
            if ($this->getAluno()->getSexo() == "FEMININO") {
                $pronome = "ela";
                $pronome2 = "A aluna";
            } else {
                $pronome = "ele";
                $pronome2 = "O aluno";
            }
            echo "<p>$pronome2 {$this->getAluno()->getNome()} é bolsista, então $pronome paga com desconto"; 
            echo "<br/>o valor era R$ {$this->getAluno()->getMensalidade()} e ficou R$ {$this->getDesconto()}</p>";
        }

        //----------------
        //metodos getters e setters

        public function getBolsa()
        {
                return $this->bolsa;
        }

        public function setBolsa($bolsa)
        {
                $this->bolsa = $bolsa / 100;

                return $this;
        }

        public function getAluno()
        {
                return $this->aluno;
        }

        public function setAluno($aluno)
        {
                $this->aluno = $aluno;

                return $this;
        }

        public function getDesconto()
        {
                return $this->desconto;
        }

        public function setDesconto()
        {
            $valor = $this->getAluno()->getMensalidade();
            $porcentagem = $this->getBolsa();
            $this->desconto = $valor - ($valor * $porcentagem);
            return $this;
        }
    }

?>