<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Bintang=<input type="text" name="jumlah">
        <br>
        <input type="submit" value="kirim">
    </form>

    <?php
        if ($_POST) {
            for ($i=0; $i < $_POST['jumlah']+1 ; $i++) { 
                for ($j=0; $j < $i ; $j++) { 
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>