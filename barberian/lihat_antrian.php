<!doctype html>
<?php include "koneksi.php" ;
?>
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
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!--My CSS-->
    <link rel="stylesheet" href="lihat_antrian.css">
    <title>Barberian</title>
  </head>
  <body>

  <!--Navbar-->
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top sticky">
    <div class="container">
      <a class="navbar-brand" href="#">Barberian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link js-scroll-trigger" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link js-scroll-trigger" href="#tentang_kami">Tentang Kami</a>
          <a class="nav-item nav-link js-scroll-trigger" href="katalog.html">Katalog</a>
          <a class="nav-item nav-link js-scroll-trigger" href="caribarber.php">Cari Barbershop</a>
          <?php if(!isset($_SESSION['username'])){ ?>
          <div class="dropdown">
            <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Masuk
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="" data-toggle="modal" data-target="#darkModalForm">Masuk Sebagai Customer</a>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalLoginForm">Masuk Sebagai Barbershop</a>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalForm">Masuk Sebagai Barberman</a>
                  </div>
            </div>
            <?php }else{
          ?>
          <div class="dropdown">
            <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username']?>
                  </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href='profilcs.php'>Profil</a>
                  <a class="dropdown-item" href="" >History Order</a>
                  <a class="dropdown-item" href="" >Lihat Antrian</a>
                  <a class="dropdown-item" href="logout.php" >Logout</a>
                </div>
            </div>
            <?php }
            ?>
          </div>
        </div>
    </div>
    </nav>
  <!-- akhir Navbar -->
    <!-- Form -->
    <form action="pprofilcs.php" method="POST" name="form1" enctype="multipart/form-data" >
    <div class="container">
           <div class="form-group row">
              <label for="nomor" class="col-sm-2 col-form-label">Nomor Antrianmu :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nomor" disabled value="<?php echo $data['username_cs']; ?>" >
              </div>
            </div>
            <div class="form-group row">
              <label for="nomor2" class="col-sm-2 col-form-label">Nomor Antrian Saat : Ini</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nomor2" disabled value="<?php echo $data['nama_cs']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama_barber" class="col-sm-2 col-form-label">Nama Barbershop :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_barber" disabled value="<?php echo $data['email_cs']; ?>">
              </div>
            </div>
            <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary mb-2">Ambil Antrian</button>
            </div>
      
    </div>
    </form>
    <!-- akhir Form -->

  <!-- akhir Navbar -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>