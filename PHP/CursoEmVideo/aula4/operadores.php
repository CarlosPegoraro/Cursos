<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operadores</title>
</head>
<body>
    <div>
        <?php 
            $preco = $_GET['p'];
            echo "o preco do produto e R$ " . number_format($preco, 2);
            $preco += $preco * 10/100;
            echo "</br> o novo preco com 10% de aumento e R$ " . number_format($preco, 2);
        ?>
    </div>
</body>
</html>