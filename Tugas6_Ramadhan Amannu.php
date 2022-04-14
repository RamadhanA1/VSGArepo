<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstraps -->
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Title -->
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">MyApps</a>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Calkulator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Converter</a>
            </li>
        </div>
      </div>
    </nav>      

    <!-- Jumbotron -->
    <div class="mt-5 p-5 text-white text-center" style="background-color: #709CF3;">
      <h3>SIMPLE CALCULATOR</h3>
    </div>


    <!-- Body -->
    <h3 class="container p-3">INPUT</h3>
    <div class="container p-4 d-flex justify-content-center">
      <form class="row g-4" action="" method="post">
        <div class="col-auto">
          <input class="form-control" type="text" name="bil1" placeholder="Bilangan Pertama">
        </div>
        <div class="col-auto">
          <select class="form-select" name="operasi" id="">
              <option selected>Pilih Operasi</option>
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
              <option value="%">%</option>
          </select>
        </div>
        <div class="col-auto">
          <input class="form-control" type="text" name="bil2" placeholder="Bilangan Kedua">
        </div>
        <div class="col-auto">
          <input class="btn btn-primary" type="submit" value="HASIL">
        </div>      
      </form>
    </div>

    <hr>
    
    <!-- Bottom Credit -->
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
          <span class="navbar-text">2022. Made By Ramadhan Amannu.</span>
      </div>
    </nav> 

    <!-- Operasi Hitung -->
    <div class="container p-3">
      <h3>RESULT</h3>
      <div class="p-5 d-flex justify-content-center">
        <p><strong>
      <?php
        function penjumlahan(float $a, float $b){
            $c=$a+$b;
            echo $c;
        }
        function pengurangan(float $a, float $b){
            $c=$a-$b;
            echo $c;
        }
        function perkalian(float $a, float $b){
            $c=$a*$b;
            echo $c;
        }
        function pembagian(float $a, float $b){
            $c=$a/$b;
            echo $c;
        }
        function modulus(float $a, float $b){
            $c=$a%$b;
            echo $c;
        }

        if ($_POST) {
            $a=$_POST['bil1'];
            $operasi=$_POST['operasi'];
            $b=$_POST['bil2'];
            echo "Hasil ".$a." ".$operasi." ".$b." adalah ";
            if ($operasi=="+") {
                penjumlahan($a, $b);
            }
            elseif ($operasi=="-") {
                pengurangan($a, $b);
            }
            elseif ($operasi=="*") {
                perkalian($a, $b);
            }
            elseif ($operasi=="/") {
                pembagian($a, $b);
            }
            else {
                modulus($a,$b);
            }   
        }
      ?>
      </strong></p>
      </div>
    
    </div>
    

      


    <!-- Javascripst -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>