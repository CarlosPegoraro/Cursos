<?php

$contaCorrentes = [
    '125.458.475-54' => [
        'titular' => ' Carlos',
        'saldo' => 4000
    ],
    '478.512.549-86' => [
        'titular' => ' Helen',
        'saldo' => 8500
    ],
    '653.298.745-48' => [
        'titular' => ' Ricardo',
        'saldo' => 10000
    ],
    '589.245.658-32' => [
        'titular' => ' Marco',
        'saldo' => 1250
    ]
];


foreach ($contaCorrentes as $cpf => $conta) {
    echo $cpf . $conta['titular'] . PHP_EOL;
}