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

    <!--My CSS-->
    <link rel="stylesheet" href="pendaftaran.css">
    <title>Barberian</title>
  </head>
  <body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Barberian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link js-scroll-trigger" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link js-scroll-trigger" href="#tentang_kami">Tentang Kami</a>
          <a class="nav-item nav-link js-scroll-trigger" href="katalog.html">Katalog</a>
          <a class="nav-item nav-link js-scroll-trigger" href="caribarber.html">Cari Barbershop</a>
          <div class="dropdown ml-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Masuk
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item " href="/K3GOL_E/barberian/Login/Login.php">Masuk sebagai Pelanggan</a>
              <a class="dropdown-item " href="/draft/login.php">Masuk sebagai Barbershop</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </nav>
    <!-- Form -->
    <form action="cekdaftar.php" method="post" name="form1">
    <div class="container">
        <h3>Registration Form</h3>

            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Upload Foto</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control-plaintext" id="foto">
                </div>
            </div>
        
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="Alamat Email">
              </div>
            </div>
            <div class="form-group row">
                    <label for="no" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no" placeholder="Nomor Telepon">
                    </div>
                  </div>
            <div class="form-group row">
                    <label for="alamat"  class="col-sm-2 col-form-label">Alamat Rumah</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" type="text" name="alamat" rows="3"></textarea>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Password" value='' data-bv-notempty='true' data-bv-notempty-message='The password is required and cannot be empty' data-bv-identical='true' data-bv-identical-field='password_confirmation' data-bv-identical-message='The password and its confirmation are not the same'>
                    </div>
            </div>
            <div class="form-group row"> 
                <label for="ConPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label> 
                <div class="col-sm-10"> 
                    <input type="password" id="konpassWord" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" value="" data-bv-notempty='true' data-bv-notempty-message='The password confirmation is required and cannot be empty' data-bv-identical='true' data-bv-identical-field='password' data-bv-identical-message='The password and its confirmation are not the same' /> 
                    <small class="form-text text-muted">Ulangi password diatas sekali lagi.</small> 
                </div> 
            </div>
            <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
            </div>
          </form>
    </div>
    <!-- akhir Form -->

  <!-- akhir Navbar -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>