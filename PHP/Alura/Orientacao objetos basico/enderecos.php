<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('arozz', 'feijao', 'mandioca', '254');
$doisEndereco = new Endereco('macarrao', 'tomate', 'limonada', '456');


echo $umEndereco;
echo $doisEndereco;
