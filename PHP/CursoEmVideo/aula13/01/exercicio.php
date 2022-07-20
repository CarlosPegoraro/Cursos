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
           $p = "leite";
           $pr = 4.5;
           printf("O %s custa R$ %.2f", $p, $pr);
           /*%d - valor decimal (positivo ou negativo)
            %u - valor decimal sem sinal (positivo)
            %f - valor real
            %s - string (texto)*/
        ?>
    </div>
</body>
</html>