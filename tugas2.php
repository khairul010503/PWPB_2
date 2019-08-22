<?php
    $br_satu= "Kubus";
    $umur_satu= 16; 
    $hobi_satu= "Futsal";
    $tinggi_satu= 166;

    $br_dua= "Limas Segitiga";
    $umur_dua= 16;
    $hobi_dua= "Berenang";
    $tinggi_dua= 158;

    $br_tiga= "Lingkaran";    
    $umur_tiga= 16;
    $hobi_tiga= "Sepak Bola";
    $tinggi_tiga= 159;    

    $br_empat= "Kerucut";    
    $umur_tiga= 16;
    $hobi_tiga= "Sepak Bola";
    $tinggi_tiga= 159;    

    $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;

    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

        .orang{
          width: 150px;
          height: 150px;
          border-radius: 50%;
          object-fit: cover;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">PWPB 2<span class="sr-only">(current)</span></a>
        </li>
       
      </ul>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
          <center>  <h1>Tugas Kedua Bangun Ruang</h1></center>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="container marketing">
      <div class="row">
      <div class="col-lg-4">
       <br><img class="orang" src="img/kubus.gif"><br>
       <?php
        echo "<h2>$br_satu</h2>";
        echo "Umur : $umur_satu<br>";
        echo "Hobi : $hobi_satu<br>";
        echo "Tinggi Badan : $tinggi_satu<br>";
        ?>
        <p></p>
 
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <br><img class="orang" src="img/limassegitiga.gif">
       <?php
        echo "<h2>$br_dua</h2>";
        echo "Umur : $umur_dua<br>";
        echo "Hobi : $hobi_dua<br>";
        echo "Tinggi Badan : $tinggi_dua<br>";
        ?> 
        <p></p>
  
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <br><img class="orang" src="img/lingkaran.gif">
       <?php
        echo "<h2>$br_tiga</h2>";
        echo "Umur : $umur_tiga<br>";
        echo "Hobi : $hobi_tiga<br>";
        echo "Tinggi Badan : $tinggi_tiga<br>";
        ?>
        <p></p>

 </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <br><img class="orang" src="img/kerucut.gif">
       <?php
        echo "<h2>$br_empat</h2>";
        echo "Umur : $umur_dua<br>";
        echo "Hobi : $hobi_dua<br>";
        echo "Tinggi Badan : $tinggi_dua<br>";
        ?> 
        <p></p>

         </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <br><img class="orang" src="img/zidan.jpg">
       <?php
        echo "<h2>$nama_dua</h2>";
        echo "Umur : $umur_dua<br>";
        echo "Hobi : $hobi_dua<br>";
        echo "Tinggi Badan : $tinggi_dua<br>";
        ?> 
        <p></p>

         </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <br><img class="orang" src="img/aku.jpg">
       <?php
        echo "<h2>$nama_dua</h2>";
        echo "Umur : $umur_dua<br>";
        echo "Hobi : $hobi_dua<br>";
        echo "Tinggi Badan : $tinggi_dua<br>";
        ?> 
        <p></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
     <center><p class="lead">Rata-rata tinggi kami = <?php echo $rata_rata ?></p></center>

       <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


 
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
