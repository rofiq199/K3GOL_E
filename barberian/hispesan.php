<?php
  $koneksi = mysqli_connect("localhost","root","","barberian");
  // Check connection
  if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--My CSS-->
    <link rel="stylesheet" href="histori_order.css">
  
    <title>Barberian</title>
  </head>
  <body>
  <?php include 'navbar.php'; ?>
<!-- Section: Features v.1 -->
<!-- akhir Fitur -->
<?php 
   $username = $_SESSION['username'];
   // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
   $query ="SELECT * FROM penjualan  WHERE username_cs='".$username."' order by kode_jual desc";
   $sql = mysqli_query($koneksi, $query)  // Eksekusi/Jalankan query dari variabel $query
   //$query ="SELECT * penjualan ";
   //$sql = mysqli_query($koneksi, $query)  // Eksekusi/Jalankan query dari variabel $query
?>
<!-- Body -->
<div class="container">
<?php while($data = mysqli_fetch_array($sql)){?>
  <div class="card">
  <div class="card-header">
  <h5 class="card-title">Kode Transaksi : <?php echo $data['kode_jual']; ?></h5>
  </div>
    <div class="card-body">
      
      <p class="card-text">Total Harga : Rp <?php echo $data['total_harga']; ?></p>
      <p class="card-text">Tanggal : <?php echo $data['tanggal_jual']; ?></p>
      <a href="#collapseExample<?php echo $data['kode_jual']; ?>" class="btn btn-primary" data-toggle="collapse" >Lihat Detail</a>
    </div>
    <div class="collapse" id="collapseExample<?php echo $data['kode_jual']; ?>">
      <div class="collapse-content">
      <div class="container">
      <div class="card-footer">
        <p id="collapseExample">Detail Pembelian </p>
        <table cellspacing="0" width="70%">
        <tr>
        <td>Foto</td>
        <td>Nama Produk</td>
        <td>Toko</td>
        <td>Harga Produk</td>
        </tr>
     <?php   
     $query1 ="SELECT * FROM detail_penjualan inner join produk on detail_penjualan.kode_produk=produk.kode_produk where kode_jual='".$data['kode_jual']."' ";
    $sql1 = mysqli_query($koneksi, $query1);  // Eksekusi/Jalankan query dari variabel $query
    while($data1 = mysqli_fetch_array($sql1)){
    ?>
        <tr>
        <td><img src="admin/img/<?php echo $data1['foto_produk']; ?>" width="100px" height="100px"></td>
        <td><?php echo $data1['nama_produk']; ?></td>
        <td><?php echo $data1['username_bs']; ?></td>
        <td>Rp.<?php echo $data1['harga_produk']; ?></td>
        </tr>
    <?php }?>
        </table>
        </div>
        </div>
      </div>
    </div>

  </div>
  <?php }?>
</div>

<!-- collapse -->

<!-- collapse -->
<!-- body -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <form action="login/ceklogin.php" method="POST">
    <div class="modal-content card card-image" id="popup">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> IN</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="username" name="username" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" id="username" value=""for="Form-email5">Your email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" name="password" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" id="password" value=""for="Form-pass5">Your password</label>
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" id="tombollogin" class="btn btn-success btn-block btn-rounded z-depth-1">Sign In</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">Don't Have an account? <a href="#" class="green-text ml-1 font-weight-bold">
                  Sign Up</a></p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    </form>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Contect-->
    <form action="Login/cekloginbs.php" method="POST">
    <div class="modal-content card card-image" id="popupp">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
    <!--Header-->
    <div class="modal-header text-center pb-4">
      <h3 class="modal-title w-100 white-text font-wight-bold" id="myModalLabel"><strong>SIGN</strong> <a
          class="green-text font-weight-bold"><strong>IN</strong></a></h3>   
        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
      <!--Body-->
      <div class="md-form mb-5">
        <input type="username" id="defaultForm-email" class="form-control validate white-text" name="username">
        <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="defaultForm-pass" class="form-control validate white-text" name="password" >
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>
        
        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

        <!--Grid column-->
        <div class="text-center mb-3 col-md-12">
          <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Login</button>
        </div>
        <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12">
            <p class="font-small white-text d-flex justify-content-end">Don't Have an Account? <a href="#" class="green-text ml-1 font-weight-bold">
                Sign Up</a></p>
          </div>
          <!--Grid column-->

    </div>
    <!--Grid row-->

    </div>
      </div>
    </div>
    </form>
    <!--/.Content-->
  </div>
</div>  
<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <form action="/K3GOL_E/barberian/Login/cekloginbm.php " method="POST">
    <div class="modal-content card card-image" id="popuppp">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> IN</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="username" name="username" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" name="password" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign In</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">Don't Have an account? <a href="#" class="green-text ml-1 font-weight-bold">
                  Sign Up</a></p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    </form>
    <!--/.Content-->
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
  </body>
</html>