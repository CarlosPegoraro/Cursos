<?php

// $notas = [
//     [
//         "aluno" => "Maria",
//         "nota" => 10,
//     ],
//     [
//         "aluno" => "Vinicios",
//         "nota" => 6,
//     ],
//     [
//         "aluno" => "Ana",
//         "nota" => 9,
//     ],
// ];

$notas = [
    "ana" => 10,
    "joao" => 8,
    "roberto" => 7,
    "maria" => 9,
    "vinicius" => 6,
];

function ordenaNotas(array $nota1, array $nota2): int {
    return $nota1['nota'] <=> $nota2['nota'];
}

/** 
 * * sort($notas); Ordena o array do menor para o maior 
 * * rsort($notas); Ordena do maior pro menor (Perde as chaves)
 * * usort($notas, 'ordenaNotas'); Ordena de arcordo com o seu padrao
 * * arsort($notas); Ordena mantendo os index
 * * ksort($notas); Ordena pelo index
*/
var_dump($notas);