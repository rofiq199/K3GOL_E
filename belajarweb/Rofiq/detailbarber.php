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
        <link rel="stylesheet" href="DetailBarber.css">
        <title>Barberian</title>
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
    </head>
    <body>
<?php $id = $_GET['id'];?>
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
          <a class="nav-item nav-link" href="index.php#tentang_kami">Tentang Kami</a>
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
  <!-- akhir Navbar -->
       
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade mt-3" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                            alt="First slide">
                        <div class="mask rgba-black-light"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                            alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                            alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                        </div>
                    </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
                <?php  
                include "koneksi.php";
                 $query= "SELECT * from  data_barber where username_bs='".$id."'";
                 $result=mysqli_query($koneksi,$query)
                ?>
        <div class="container">
        <?php $data = mysqli_fetch_array($result);?>
                <h2 class="Deskripsi mt-3"><?php echo $data['nama_bs'];?></h2>
                <text class="text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                  ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                  occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
                  laborum.</text>
        </div>
        <div class="container">
        <button type="button" class="btn btn-primary mt-3 ">Ambil Antrian</button>
        <button type="button" class="btn btn-success mt-3 " href="#teamkami">Order</button>
      </div>
        <!-- Section: Team v.1 -->
<div class="container">
<section class="team-section text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5" id="teamkami">Our amazing team</h2>
        <!-- Section description -->
        <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
          eum porro a pariatur veniam.</p>
      
        <!-- Grid row -->
        <div class="row">
        
      
          <!-- Grid column -->
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Order</a>
            </div>
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="card ml-5" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Order</a>
            </div>
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-lg-3 col-md-6">
            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
                alt="Sample avatar" name="foto">
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
            <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
            <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
              totam officia voluptates perferendis voluptatibus aut.</p>
              <button type="button" class="btn btn-success" name="tombol">ORDER</button>
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
</div>
      <!-- Section: Team v.1 -->
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
  
  <!-- barang -->
  <div class="container">
    <section class="team-section text-center my-5">
    
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Lihat Juga Barang Kami</h2>
            <!-- Section description -->
          
            <!-- Grid row -->
            <div class="row">

                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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