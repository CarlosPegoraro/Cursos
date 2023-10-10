<?php

$notas = [
    "Vinicius" => null,
    "Joao" => 8,
    "Ana" => 10,
    "Roberto" => 7,
    "Maria" => 9
];

if (is_array($notas)) {
    echo "Sim, é um array<br>";
}

var_dump(array_is_list($notas));


echo "<br>Ana fez a prova? ";
// var_dump(array_key_exists("Ana", $notas)); /*Valida somente se a chave existe*/ 
var_dump(isset($notas['Ana'])); /* Valida se a chave existe e se ela nao eh nula*/ 

echo "<br>Alguem tirou 10? <br> ";
var_dump(in_array(10, $notas, true)); /*Analiza se existe um valor especifico existe dentro do valor*/

echo "<br>Quem tirou 10? <br>";
echo array_search(10, $notas); /*Encontra uma chave usando o valor como parametros (se existe ele retorna string ou int, senao retorna false)*/