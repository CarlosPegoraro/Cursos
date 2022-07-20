<?php

$nomes = "Carlos, Marco, Ricardo, Helen";

$arry_nomes = explode("," , $nomes);

foreach ($arry_nomes as $nome) 
{
    echo "<p>Olá $nome!</p>";
}

$nomesJuntos = implode("," , $arry_nomes);

echo $nomesJuntos;