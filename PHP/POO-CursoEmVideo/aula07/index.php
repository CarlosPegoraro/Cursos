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
            require_once 'Lutador.php';
            require_once 'Luta.php';
            //--------------------------
            //declaracao de variaveis
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("SnapShadown", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $UEC1 = new Luta();
            $UEC1->marcarLuta($l[0], $l[1]);
            $UEC1->lutar();
            
        ?>
    </pre>
</body>
</html>