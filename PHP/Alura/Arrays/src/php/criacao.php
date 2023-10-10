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

var_dump($alunos2022);

/** 
 * * array_merge() = faz a unicao de arrays, chaves string sao substituidas pelo ultimo array, chaves numericas sao acresentadas
 * * + -> unicao = une os arrays, porem aqueles que tiverem o memso index serao ignorados
 * * ... -> spread = desempacota os arrays, ele tira os conchetes do array -> pode ser mais flexivel pois pode ter dados no meio deles -> [...$array1, "Carlos", ...$array2]
*/