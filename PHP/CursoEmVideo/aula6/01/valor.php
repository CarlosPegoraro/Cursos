<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET['v'];
            $rq = sqrt($valor);
            $arredondar = round($rq, 2);
            echo "A raiz de $valor é $arredondar";
        ?>
        <br/>
        <a href="exercicio.html">Voltar</a>
    </div>
</body>
</html>