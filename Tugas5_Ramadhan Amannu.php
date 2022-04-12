<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function penjumlahan(int $a, int $b){
            $c=$a+$b;
            echo "hasil penjumlahan adalah : ". $c. "<br>";
        }
        function pengurangan(int $a, int $b){
            $c=$a-$b;
            echo "hasil pengurangan adalah : ". $c. "<br>";
        }
        function perkalian(int $a, int $b){
            $c=$a*$b;
            echo "hasil perkalian adalah : ". $c. "<br>";
        }
        function pembagian(int $a, int $b){
            $c=$a/$b;
            echo "hasil pemabagian adalah : ". $c. "<br>";
        }

        $a=9;
        $b=3;
        echo "bilangan 1 : ". $a. "<br>";
        echo "bilangan 2 : ". $b. "<hr><hr>";
        penjumlahan($a, $b);
        pengurangan($a, $b);
        perkalian($a, $b);
        pembagian($a, $b);
    ?>
</body>
</html>