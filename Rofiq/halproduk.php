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
    <link rel="stylesheet" href="halproduk.css">
    <title>Barberian</title>
  </head>
  <body>

  <!--Navbar-->
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Barberian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link " href="index.html">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Tentang Kami</a>
          <a class="nav-item nav-link " href="katalog.html">Katalog</a>
          <a class="nav-item nav-link " href="caribarber.php">Cari Barbershop</a>
          <a class="nav-item nav-link " href="halproduk.php">Produk</a>
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
<div class="container">

    <div class="mt-5 row">
    <?php
      include "koneksi.php";
      $query=" SELECT * from  produk join data_barber on produk.username_bs=data_barber.username_bs ";
      $result=mysqli_query($koneksi,$query) or die(mysqli_error());
      $no=1;
      //proses menampilkan data
      while($rows=mysqli_fetch_object($result)){
      ?>
        <div class="col-sm-4 mt-2" >
          <div class="card">
              <img src="admin/img/<?=$rows -> foto_produk;?>"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$rows -> nama_produk;?></h5>
              <p class="card-text">Rp. <?=number_format($rows -> harga_produk);?></p>
              <h6 class="card-title"><?=$rows -> nama_bs;?></h6>
              <p><a href="cart.php?id=<?php echo $rows->kode_produk; ?>&action=add">Order Now</a></p>
            </div>
          </div>
        </div>
            
                <?php
                  }
                  ?>
              </div>
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>