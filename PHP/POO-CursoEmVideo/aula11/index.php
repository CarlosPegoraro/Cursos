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
            color: yellowgreen;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            
            //chama as classes e outros arquivos
            require_once 'Visitante.php';
            require_once 'AlunoMedio.php';
            require_once 'Bolsista.php';

            //--------------------------------
            //declaracao de variaveis

            $v[0] = new Visitante("Carlos", 1985, "MASCULO");

            $a[0] = new AlunoMedio("Giovanna", 2007, "feminino", "15878", "academico");
            $a[1] = new AlunoMedio("Marco", 2007, "masculino", "15985", "informatica");

            $b[0] = new Bolsista($a[0], 10);

            //------------------------------
            //codigo

            $a[0]->pagarMensalidade();
            $a[1]->pagarMensalidade();

            $b[0]->renovarBolsa();
            $b[0]->pagarMensalidade();
            
        ?>
    </pre>
</body>
</html>