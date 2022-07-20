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
            $v = isset($_GET['val']) ? $_GET['val'] : 1;
            $d = 0;
            echo "<h1>Analisando o número $v</h1>";
            echo "Valores múltiplos: ";
            //consultar se o modulo da divisao eh igual a 0, se sim: mostrar o valor, adicionar 1 ao contador e repitir o processo; se nao: adicionar 1 ao contador e repitir o processo
            for ($c=1; $c <= $v; $c++) { 
                $m = $v % $c;
                if ($m == 0) {
                    echo "$c ";
                    //CONTAR QUANTAS VEZES O CONTADOR FOI ADICIONADO
                    $d++;
                }
            }
            echo "<br/>Total de multiplos: $d";
            if ($d == 2) {
                echo "<br/>O número analisado <span class='foco'>É Primo</span>";
            } else {
                echo "<br/>O número analisado <span class='foco'>Não é Primo</span>";
            }

        ?>
        <br/>
        <a class="botao" href="exercicio.php">Voltar</a>
    </div>
</body>
</html>