<?php
    echo "========================
        CETAK BILANGAN GANJIL GENAP 1-100
        ========================<br>";
    for ($i=0; $i < 100 ; $i++) { 
        $a=$i+1;
        $x=$a%2;
        if ($x==1) {
            echo $a." adalah Bilangan Ganjil<br>";
        }
        else {
            echo $a." adalah Bilangan Genap<br>";
        }
        
    }
?>