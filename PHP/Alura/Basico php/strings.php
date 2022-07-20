<?php

$idade = 15;
'Ola mundo'; //aspas simples não pega comandos, interpreta tudo como string(texto)
"Ola mundo"; //aspas duplas coletam comandos, diferencia comando de string
// \n é um caractere especial usado para quebrar linhas
// \t é um caractere especial usado para dar tab na linha
// lista de caracteres especiais https://www.php.net/manual/pt_BR/language.types.string.php
echo "Olá mundo!\n"; //o comando \n dentro das aspaa, quebra a linha de texto
echo "\n";//o comando \n pode ser posto em outra linha, assim pulando uma linha de texto
echo "Eu tenho $idade anos.";