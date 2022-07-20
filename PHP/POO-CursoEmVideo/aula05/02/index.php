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
            require_once 'ContaBanco.php';

            $c1 = new ContaBanco(); //jubileu
            $c2 = new ContaBanco(); //creusa
            $c1->abrirConta("CC", "Jubileu", 1111);
            $c1->depositar(7500);
            $c1->sacar(2000);
            $c2->abrirConta("CP", "Creuza", 1520);
        ?>
    </pre>
</body>
</html>