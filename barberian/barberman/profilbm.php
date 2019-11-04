<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin02.css">
    <script src="https://kit.fontawesome.com/ef8e8d5793.js" crossorigin="anonymous"></script>
    <title>HALAMAN LIHAT PROFIL</title>
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
	$query = "SELECT * FROM data_barberman  WHERE username_bm='".$username."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  $bs =$data['username_bs'];
  $query1 = "SELECT * FROM data_barber  WHERE username_bs='".$bs."'";
	$sql1 = mysqli_query($koneksi, $query1);  // Eksekusi/Jalankan query dari variabel $query
  $data1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql
	?>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="../index.php">BARBERIAN</a>
          <div class="navbar-brand" >
                  <a class="fas fa-sign-out-alt mr-3"  href="../logout.php" >keluar</a>
          </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2,5 bg-dark mt-2 pr-3 pt-4">
                <ul class="nav flex-column ml-3 mb-5">
                        <li class="nav-item">
                          <a class="nav-link active text-white" href="ORDERAN.html"><i class="fas fa-tags mr-2"></i>LIHAT ORDERAN</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="Lihat_Profil.html"><i class="fas fa-user-edit mr-2"></i>LIHAT PROFIL</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="History.html"><i class="fas fa-money-check mr-2"></i>HISTORY ORDER</a><hr class="bg-secondary">
                        </li>
                       
                      </ul>
        </div>
        <div class="col-md-8 p-5 pt-2">
          <h3><i class="fas fa-user-edit mr-2"></i>LIHAT PROFIL</h3><hr>

            <form class="md-form" method="POST" action="pprofilbm.php" enctype="multipart/form-data" >
              <div class="file-field">
                <div class="mb-4">
                  <center><img src="img/<?php echo $data['foto_bm']; ?>"
                    width = 240px height = 240px class="rounded-circle z-depth-1-half avatar-pic" ><center>
                </div>
                <div class="d-flex justify-content-center">
                  <div class="btn btn-mdb-color btn-rounded float-left">
                    <span>Add photo</span>
                    <input type="file" name="foto">
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-group col-md-6">
                <label for="inputemail4">USERNAME BARBERMAN</label>
                <input type="email" class="form-control" id="inputEmail14" disabled value="<?php echo $data['username_bm'] ?>">
              </div>              
              <div class="form-group col-md-6">
                <label for="email">BARBERSHOP</label>
                <input type="email" class="form-control" id="inputEmail14" disabled value="<?php echo $data1['nama_bs']; ?>">
              </div>
              <div class="form-group col col-md-6">
                <label for="inputEmail4">NAMA LENGKAP</label>
                <input type="text" class="form-control" id="inputname" name="nama" value="<?php echo $data['nama_bm']; ?>" >
              </div>
              <div class="form-group col-md-6">
                <label for="email">E-MAIL</label>
                <input type="email" class="form-control" id="inputEmail14" name="email" value="<?php echo $data['email_bm']; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">ALAMAT</label>
                <input type="text" class="form-control" id="inputAddress2" name="alamat" value="<?php echo $data['alamat_bm']; ?>">
              </div>
              <div class="form-group col-md-6">
              <label for="inputAddress2">NOMOR TELEPON</label>
              <input type="text" class="form-control" id="inputZip" name="no" value="<?php echo $data['no_bm']; ?>">
              </div>
            <div class="form-group col-md-6">
                <label for="inputPassword6">PASSWORD</label>
                <input type="password" id="inputPassword6" class="form-control" name="password" value="<?php echo $data['password_bm']; ?>">
                <small id="passwordHelpInline" class="text-muted">
                  Harus Terdiri Dari 5-10 Karakter
                </small>
                <div></div>
                <label for="inputPassword6">PASSWORD</label>
                <input type="password" id="inputPassword6" class="form-control" placeholder="Masukkan Ulang Password Baru">
                <small id="passwordHelpInline" class="text-muted">
                  Konfirmasi Password
                </small>
            </div>
            <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
          </form>
          
           

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin2.js"></script>
  </body>
</html>