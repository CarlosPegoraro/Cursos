<?php

$conta1 = [
    'titular' => 'Carlos',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Helen',
    'saldo' => 2000
];
$conta3 = [
    'titular' => 'Ricardo',
    'saldo' => 3000
];
$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i += 1) {
    echo $contaCorrentes[$i]['titular'] . PHP_EOL;
}