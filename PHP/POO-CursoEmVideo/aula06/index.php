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
        require_once 'ControleRemoto.php';
        //-------------------------------------------
        //declaracao das variaveis e classes em primeia instancia

        $c1 = new ControleRemoto();
        //--------------------------
        //Inicio do codigo
        echo "<h2>Projeto do Controle Remoto</h2>";
        $c1->ligar();
        $c1->maisVolume();
        $c1->abrirMenu();
        $c1->ligarMudo();
        $c1->abrirMenu();

    ?>
    </pre>
</body>
</html>