<?php

$alunos2021 = [
    "Vinicius",
    "Joao",
    "Ana",
    "Roberto",
    "Maria"
];

$novosAlunos = [
    "Patricia",
    "Nico",
    "Kilderson",
    "Daiane",
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);
array_push($alunos2022, "Carlos", "Eduardo", "Vitoria");
array_unshift($alunos2022, "Stefani", "Rafarela");
var_dump($alunos2022);

/** 
 * * array_push() = adiciona elementos em um array
 * * $array[] = valor -> adiciona um elemento ao final do array
 * * array_unshift() = adiciona elementos ao inicio de um array
 * * array_shift() = coleta o primeiro item e remove de um array
 * * array_pop() = coleta o ultimo elemento e o remove de um array
*/