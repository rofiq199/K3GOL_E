<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

    <!--My CSS-->
    <link rel="stylesheet" href="caribarber.css">
    <title>Barberian</title>
  </head>
  <body>

  <!--Navbar-->
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Barberian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link " href="index.html">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Tentang Kami</a>
          <a class="nav-item nav-link " href="katalog.html">Katalog</a>
          <a class="nav-item nav-link " href="caribarber.php">Cari Barbershop</a>
    </div>
    <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Masuk
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#darkModalForm">Masuk Sebagai Customer</a>
                <a class="dropdown-item" href="caribarber.html">Masuk Sebagai Barbershop</a>
                <a class="dropdown-item" href="halaman_order.html">Masuk Sebagai Barberman</a>
              </div>
        </div>
      </div>
    </div>
    </nav>
  <!-- akhir Navbar -->
  <!-- Jumbotron -->
  <!-- Section: Blog v.3 -->

<div class="container">
<div class="input-group md-form form-sm form-2 pl-0 my-5">
  <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>
<section class="my-5 barber">
  <hr class="my-4">
<?php
include "koneksi.php";
$query=" SELECT * from  data_barber ";
$result=mysqli_query($koneksi,$query) or die(mysqli_error());
$no=1;
//proses menampilkan data
while($rows=mysqli_fetch_object($result)){
?>
  <!-- Grid row -->
  <div class="card">
  <div class="card-body">
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="admin/img/<?=$rows -> foto;?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong><?=$rows -> nama_bs;?></strong></h3>
      <!-- Excerpt -->
      <p class="Deskripsi"><?=$rows -> alamat_bs;?><br>
      <?=$rows -> jam_buka;?>-<?=$rows -> jam_tutup;?></p>
      <!-- Read more button -->
      <a class="btn btn-primary btn-md">Read more</a>

    </div>
    <!-- Grid column -->
  </div>  
  </div>
  </div>
  <!-- Grid row -->
<?php
}
?>
</section>
</div>

<!-- Section: Blog v.3 -->
  <!-- akhir Jumbotron -->
<!-- Modal -->
<!-- Modal -->
<form action="Login/cekloginbs.php" method="POST">
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="username" id="defaultForm-email" class="form-control validate" name="username">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
          </div>
  
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate" name="password" >
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
  
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <form action="Login/cekloginbm.php" method="POST">
  <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="username" id="defaultForm-email" class="form-control validate" name="username" >
            <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
          </div>
  
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate" name="password" >
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
  
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>
  </form>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
    </body>
  </html>