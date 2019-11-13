<?php
  session_start();
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

    <!--My CSS-->
    <link rel="stylesheet" href="style.css">
  
    <title>Barberian</title>
  </head>
  <body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top sticky">
    <div class="container">
      <a class="navbar-brand" href="index.php">Barberian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link js-scroll-trigger" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link js-scroll-trigger" href="#tentang_kami">Tentang Kami</a>
          <a class="nav-item nav-link js-scroll-trigger" href="katalog.php">Katalog</a>
          <a class="nav-item nav-link js-scroll-trigger" href="caribarber.php">Cari Barbershop</a>
          <a class="nav-item nav-link " href="halproduk.php">Produk</a>
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

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">#UDAHPOTONGRAMBUTHARIINI?</h1>
      </div>
    </div>
  <!-- akhir Jumbotron -->
<!-- container -->
  <div class="container" id="tentang_kami">
  <!-- Tentang Kami -->
    <div class="row workingspace">
      <div class="col">
        <img src="logo.jpg" alt="workingspace" class="img-fluid">
      </div>
      <div class="col">
        <h2 class="tentangkami">Tentang Kami</h2>
        <text class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
          ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
          occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
          laborum.</text>
      </div>
    </div>
  
  <!-- akhir Tentang Kami -->
  </div>
<!-- akhir container -->
<!-- Fitur -->
<!-- Section: Features v.1 -->
<section class="text-center my-5 fitur">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Apa Saja Fitur Kami?</h2>


  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4" id="gambar">
      <img src="" alt="">
      <h5 class="font-weight-bold my-4">Cari Barber</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4" id="gambar">

      <img src="" alt="">
      <h5 class="font-weight-bold my-4">Katalog</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4" id="gambar">

      <img src="" alt="">
      <h5 class="font-weight-bold my-4">Order</h5>
      <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
        aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->
<!-- akhir Fitur -->
<!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <form action="/K3GOL_E/barberian/Login/ceklogin.php " method="POST">
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
        <label>Don't have account?</label><a href="admin/regadmin.php">Sign Up</a>
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