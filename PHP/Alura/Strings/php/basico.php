<?php

$nome = "Marco Antonio Pegoraro Lopes";

$isParent = str_contains($nome, "Pegoraro Lopes");

if ($isParent) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}