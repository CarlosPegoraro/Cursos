<?php

namespace Alura;

require_once 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];

  $relacionados = array_combine($correntistas, $saldos);

  if (array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
 } else {
    echo "Não foi encontrado";
 };

 $maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

 echo "<pre>";
 var_dump($maiores);
 echo "</pre>";
 
  // coloca um array junto ocm o ooutou porem em ordem. $relacionados = array_merge($correntistas, $saldos);