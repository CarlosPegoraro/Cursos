<?php

$dados = [
    "nome" => "Carlos", 
    "nota" => 10,
    "idade" => 18
];

extract($dados);

var_dump($nome, $nota, $idade);

/**
 * * list() = cria variaveis separadas utilizando dados do array
 * * extract() = faz igual uma lista mas com uma sintex mais limpa
 * * compact() = voce passa o nome da chave ele vai buscar a vatriavel que tiver o nome igual
 */