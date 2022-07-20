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
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $url = "v" . $i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $i++;
            }

            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                echo "Valor $i : " . $v . "<br/>";
                $i++;
            }
        ?>
        </form>
    </div>
</body>
</html>