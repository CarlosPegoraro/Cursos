<?php

$array = [
    1 => "um",
    2 => "dois",
    3 => "tres",
];

foreach ($array as $numeral => $nome) {
    echo "$numeral se chama $nome em portugues" . PHP_EOL;
}

echo "total: " . count($array) . PHP_EOL;