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
            $r = isset($_GET['estados']) ? $_GET['estados'] : 0;
            switch ($r) {
                case 'saoPaulo':
                    echo "Voce mora na <span class='foco'>Regiao Sudeste</span>";
                    break;
                
                case 'goias':
                    echo "Voce mora na <span class='foco'>Regiao Centro-Oeste</span>";
                    break;
                
                case 'amazonias':
                    echo "Voce mora na <span class='foco'>Regiao Norte</span>";
                    break;

                case 'bahia':
                    echo "Voce mora na <span class='foco'>Regiao Nordeste</span>";
                    break;
            
                case 'parana':
                    echo "Voce mora na <span class='foco'>Regiao Sul</span>";
                    break;
            }
        ?>
        <a href="javascript:history.go(-1)" class='botao'>Voltar</a>
    </div>
</body>
</html>