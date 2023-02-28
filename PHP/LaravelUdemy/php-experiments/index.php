<?php



    require __DIR__ . '/vendor/autoload.php';
    use Cocur\Slugify\Slugify;

    $slugify = new Slugify();
    echo $slugify->slugify('the sky is blue, and the grass is green!!!');

    function doubleMe($x) {
        return $x * 2;
    }

    function tripleMe($x) {
        return $x * 3;
    }

    $ourCoolNumber = tripleMe(doubleMe(50));

    if ($ourCoolNumber > 200) {
        echo "This is a large number";
    } else {
        echo "this isn't a large number";
    }

?>