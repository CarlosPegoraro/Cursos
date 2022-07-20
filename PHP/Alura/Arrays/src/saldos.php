<?php

$saldos = [
    2500,
    2400,
    1200,
    3000,
    8000,
    6000
];

foreach ($saldos as $saldo) 
{
    echo "<p>O saldo é: R$$saldo</p>";
}

sort($saldos);

echo "O maior saldo é: R$$saldos[5]";

