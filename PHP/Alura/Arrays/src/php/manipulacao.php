<?php

$notasBimestre1 = [
    "Vinicius" => 6,
    "Joao" => 8,
    "Ana" => 10,
    "Roberto" => 7,
    "Maria" => 9
];

$notasBimestre2 = [
    "Joao" => 8,
    "Ana" => 9,
    "Roberto" => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
ksort($alunosFaltantes);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));
/** 
 * * array_diff() =  Cria um novo array com os membros que tiverem valores diferentes entre si
 * * array_diff_key() =  Cria um novo array com os membros que tiverem chaves diferentes entre si
 * * array_diff_assoc() =  Cria um novo array com os membros que tiverem chaves e valores diferentes entre si
 * * array_keys() = coleta so as chaves
 * * array_values() = coleta os valores
 * * array_combine() = combina dois arrays de mesmo tamanho, sendo que o array 1 vai ser o index do array novo, e o array 2 os valores
 * * array_flip() = inverte o index pelo valor, e vice versa
*/