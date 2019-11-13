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
    <link rel="stylesheet" href="halamanorder.css">
    <script src="script.js"></script>
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
              <a class="nav-item nav-link" href="index.php#tentang_kami">Tentang Kami</a>
              <a class="nav-item nav-link " href="katalog.html">Katalog</a>
              <a class="nav-item nav-link " href="caribarber.php">Cari Barbershop</a>
              <a class="nav-item nav-link " href="#">Produk</a>
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
        
        <form>
            <div class="container">
              <div class="col">
              <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCustomer4">Nama Customer</label>
                <input type="email" class="form-control" id="masukan4" disabled value="Nama Customer">
              </div>
              <div class="form-group col-md-5">
                <label for="inputBarberman4">Nama Barberman</label>
                <div class="form-group">
                        <select class="form-control" id="pilihBarberman">
                          <option>Barber 1</option>
                          <option>Barber 2</option>
                          <option>Barber 3</option>
                        </select>
                      </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity">Alamat</label>
                <input type="text" class="form-control" id="masukan4" disabled value="Alamat">
              </div>
            </div>
          </div>
          </div>
          </form>

          <form>
              <div class="container">
            <div class="form-group row">
                <label for="Potong Rambut" class="col-sm-2 col-form-label">Potong Rambut</label>
                <div class="col-sm-5">
                  <input type="rambut" class="form-control" id="inputRambut3" disabled value="Rambut">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputKeramas3" class="col-sm-2 col-form-label">Keramas</label>
                <div class="col-sm-5">
                  <input type="keramas" class="form-control" id="inputKeramas3" placeholder="Keramas">
                </div>
              </div>
              <div class="form-group row">
                  <label for="inputRelaksasi3" class="col-sm-2 col-form-label">Relaksasi Kepala</label>
                  <div class="col-sm-5">
                    <input type="relaksasi" class="form-control" id="inputRelaksasi3" placeholder="Relaksasi">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="Janggut" class="col-sm-2 col-form-label">Janggut</label>
                    <div class="form-group">
                        <select class="form-control" id="pilihGrade">
                          <option>Pilih</option>
                          <option>Panjang</option>
                          <option>Pendek</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="Semir" class="col-sm-2 col-form-label">Semir</label>
                      <div class="form-group">
                          <select class="form-control" id="pilihGrade">
                            <option>Pilih</option>
                            <option>Kualitas Rendah</option>
                            <option>Kualitas Sedang</option>
                            <option>Kualitas Tinggi</option>
                          </select>
                        </div>
                    </div>
                </div>
                  
                <div class="container">  
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
              </form>
      </body>
    </html>