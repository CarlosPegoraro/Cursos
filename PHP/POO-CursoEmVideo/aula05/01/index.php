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
        require_once 'Conta.php';
        
        $c1 = new Conta("Eduardo", 12050);
        $c1->abrirConta("cp");
        $c1->escrever();
        $c1->depositar(500);
        $c1->escrever();
        $c1->pularLinha();
        $c2 = new Conta("Ricardo", 15063);
        $c2->abrirConta("cc");
        $c2->escrever();
        $c2->depositar(1800);
        $c2->escrever();
    ?>
    </pre>
</body>
</html>