<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        $c1->destampar();
        $c1->rabiscar();
        echo "<br/>";
        var_dump($c1);
    ?>
    </pre>
</body>
</html>