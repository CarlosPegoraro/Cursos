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
            $n = $_GET['num'];
            $o = $_GET['oper'];
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); //$n ^ (1/2)
                    break;
            }
            
            echo "O resultado da operação é <span class='foco'>$r</span>";
        ?>
        <br/>
        <a class="botao" href="exercicio.html">Voltar</a>
    </div>
</body>
</html>