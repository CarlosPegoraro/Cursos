<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->tampar();
        print_r($c1);

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 0.7;
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
    ?>
    </pre>
</body>
</html>