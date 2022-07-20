<?php

$idade = 18; //idade da pessoa
$NumeroDePessoas = 2; //numero de acompanhates

echo "Bem vindo, você so pode entrar se tiver mais de 18 anos ";
echo "ou a partir de 16 anos acompanhado.\n"; //Mensagem inicial

//ele inicia uma serie de analizes para executar comandos, a primeira ele analiza se a idade e mais de 18 anos...
//...(analize A) se sim, ele reposnde com a resposta A, se for não, ele analiza se o individuo tem mais de 16 anos e...
//...esta acompanhado (analize B), se sim ele reponde a reposta B, caso ambas forem não (analize C), ele responde a...
//...reposta C
if ($idade >= 18 ) { //analize A
    echo "Você tem $idade anos. Pode entrar sozinho ou acompanhado.\n"; //resposta A
} else if ($idade >= 16 && $NumeroDePessoas > 1 ) { //analize B
    echo "Você tem $idade anos, e esta acompanhado(a). Pode entrar.\n"; //resposta B
} else { //analize C
    echo "Você so tem $idade anos. Você nao pode entar.\n"; //resposta C
}

echo "\n"; //linha em branco
echo "Até logo!"; //mensagem final