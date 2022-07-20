<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
        }
        pre {
            font-size: 18pt;
            color: cadetblue;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            
            //chama as classes e outros arquivos
            require_once 'Livro.php';
            require_once 'Pessoa.php';

            //--------------------------------
            //declaracao de variaveis

            $p[0] = new Pessoa("Sr. Carlos", 2006, "masculino");
            $p[1] = new Pessoa("Sr. Oliveira", 1981, "masculino");
            $p[2] = new Pessoa("Sr. Lucas", 2021, "masculino");

            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[1]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[2]);

            //------------------------------
            //codigo

            $l[0]->detalhes();
            $l[0]->abrir();
            $l[0]->avancarPagina();
            $l[0]->folhear(85);
            $l[0]->detalhes();

        ?>
    </pre>
</body>
</html>