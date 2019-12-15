<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin2.css">
    <script src="https://kit.fontawesome.com/ef8e8d5793.js" crossorigin="anonymous"></script>
    <title>HALAMAN DASHBOARD</title>
  </head>
  <body>
  <?php
      // Load file koneksi.php 
      $koneksi = mysqli_connect("localhost","root","","barberian");
      
      // Check connection
      if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
      }
      session_start();
      // Ambil data NIS yang dikirim oleh index.php melalui URL
      $username = $_SESSION['username'];
      // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
      $query = "SELECT * FROM produk  WHERE username_bs='".$username."'";
      $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
      ?>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand text-white" >BARBERIAN</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i> 
        </button>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            
            </form>
            <div class="icon ml-4">
                <h5>
                  <a href="../logout.php" class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Sign Out"></a>
                </h5>
  
            </div>
        </nav>

      <div class="row no-gutters">
      <div class="col-md-2,5 bg-dark  pt-4 ">
              <ul class="nav flex-column">
                  <ul class="nav flex-column">
                      <ul class="sidebar navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-cart-arrow-down mr-2"></i>DASHBOARD</a><hr class="bg-secondary">
                        </li>
                      <li class="nav-item">
                          <a class="nav-link active text-white" href="produk.php"><i class="fas fa-tags mr-2"></i>LIHAT PRODUK</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="barberman.php"><i class="fas fa-store mr-2"></i>LIHAT BARBERMAN</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="profil.php"><i class="fas fa-user-edit mr-2"></i>UBAH PROFIL</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="antrian.php"><i class="fas fa-money-check mr-2"></i>LIHAT ANTRIAN</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="list_harga.html"><i class="fas fa-dollar-sign mr-3 ml-2"></i>LIST HARGA</a><hr class="bg-secondary">
                        </li>
                    </ul>
                </ul>
            </div>
                <div class="col-md-8 p-5 pt-2">
                <h3><i class="fas fa-cart-arrow-down mr-2"></i>DASHBOARD</h3><hr>

            <!-- Icon Cards-->
            <div class="row text-white">
            <div class="card bg-info ml-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-shopping-bag"></i>
            </div>
            <h5 class="card-title">BARANG TERJUAL</h5>
            <div class="display-4">2</div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
      </div>

            <div class="card bg-danger ml-3" style="width: 18rem;">
            <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-money-check-alt"></i>
            </div>
            <h5 class="card-title">JUMLAH PEMESANAN</h5>
            <div class="display-4">5</div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
      </div>
        

        

