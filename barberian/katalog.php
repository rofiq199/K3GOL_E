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
    <link rel="stylesheet" href="katalog.css">
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
          <a class="nav-item nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="index.php">Tentang Kami</a>
          <div class="dropdown">
            <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fitur Kami
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="katalog.php">Katalog</a>
                    <a class="dropdown-item" href="caribarber.php">Cari Barbershop</a>
                    <a class="dropdown-item" href="halproduk.php">Produk</a>
                  </div>
              </div>
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
        <div class="container">
          <h1 class="display-4 katalog">KATALOG</h1>
          <h1 class="display-4">#CARIGAYARAMBUTMUDISINI</h1>
          <section class="team-section text-center my-5">

            <!-- Grid row -->
            <div class="row">
          
              <!-- Grid column -->
              <div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
                <div class="avatar mx-auto">
                  <!-- Masukkan Gambar disini -->
                  <img src="spike.png" width="400px" height="410px" class="rounded-circle z-depth-1"
                    alt="Sample avatar">
                  <!--  -->
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">SPIKE</h5>
              </div>
              <div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
                <div class="avatar mx-auto">
                  <img src="undercut.png" width="400px" height="410px" class="rounded-circle z-depth-1"
                    alt="sample avatar">
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">UNDERCUT</h5>
              </div>
              <div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
                <div class="avatar mx-auto">
                  <!-- Masukkan gambar disini -->
                  <img src="army.png" width="400px" height="410px" class="rounded-circle z-depth-1"
                    alt="Sample avatar">
                  <!--  -->
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">ARMY</h5>
              </div>
              <div class="col-lg-6 col-md-6 mb-lg-0 mb-5">
                <div class="avatar mx-auto">
                  <img src="bald.png" width="400px" height="410px" class="rounded-circle z-depth-1"
                    alt="Sample avatar">
                </div>
                <h5 class="font-weight-bold mt-4 mb-3">BALD</h5>
              </div>
            </div>
        
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><<</a>
    </li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="katalog.php">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="katalog2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="katalog3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="katalog2.php">>></a>
    </li>
  </ul>
</nav>
    <!-- akhir Jumbotron -->
    <!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog form-dark" role="document">
  <!--Content-->
  <div class="modal-content card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(7).jpg');">
    <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
      <!--Header-->
      <div class="modal-header text-center pb-4">
        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
            class="green-text font-weight-bold"><strong> UP</strong></a></h3>
        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" id="Form-email5" class="form-control validate white-text">
          <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="Form-pass5" class="form-control validate white-text">
          <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          <div class="form-group mt-4">
            <input class="form-check-input" type="checkbox" id="checkbox624">
            <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                Terms and Conditions</a></label>
          </div>
        </div>

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

          <!--Grid column-->
          <div class="text-center mb-3 col-md-12">
            <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Sign up</button>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12">
            <p class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" class="green-text ml-1 font-weight-bold">
                Log in</a></p>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>

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
<!-- Modal -->
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>