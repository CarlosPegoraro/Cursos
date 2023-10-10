<?php
//programa para fazer potencialização

$numero = 7;

for ($i = 1; $i <= 10; $i += 1) {
    $resultado = $numero ** $i;
    echo "$numero xx $i = #$resultado\n";
}
