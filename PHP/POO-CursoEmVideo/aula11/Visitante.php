<?php

    //requerimento de arquivos
    require_once 'Pessoa11.php';

    //classe
    class Visitante extends Pessoa11 {
        
        function __construct(string $nome, int $nascimento, string $sexo)
        {   
            $this->setNome($nome);
            $this->setNascimento($nascimento);
            $this->setSexo($sexo);
        }

    }
    

?>