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
    <link rel="stylesheet" href="testing.css">
    <script src="pesan.js"></script>
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
        
        <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-2">
              <form>
              <label for="inputCustomer4">Nama Customer</label>
              <input type="email" class="form-control" id="masukan4" disabled value="Nama Customer">
              <label for="inputBarberman4" class="mt-1">Nama Barberman</label>
                <div class="form-group">
                        <select class="form-control" id="pilihBarberman">
                          <option>Barber 1</option>
                          <option>Barber 2</option>
                          <option>Barber 3</option>
                        </select>
                      </div>
              <label for="inputCity">Alamat</label>
              <input type="text" class="form-control" id="masukan4" disabled value="Alamat">
            </form>
            </div>
            <div class="col-md-8 mt-2">
               
              <form action="" id="jumlah">
              <div class="container"> 
                <center>  <h5>Paket Potong</h5></center>
                
                <div class="garis"></div>
                <div class="row">
                  <div class="col ml-5 mt-2">
                      <input type="checkbox" class="form-check-input" id="potongrambut" value="25000" name="produk" onclick="totalit()">
                      <label class="form-check-label" for="potongrambut">Potong Rambut</label>
                    <div class="barang mt-2">
                      <input type="checkbox" class="form-check-input" id="keramas" value="10000" name="produk" onclick="totalit()">
                      <label class="form-check-label" for="keramas">Keramas</label>
                    </div>
                    <div class="barang mt-2">
                      <input type="checkbox" class="form-check-input" id="hairtato" value="5000" name="produk" onclick="totalit()">
                      <label class="form-check-label" for="hairtato">Hairtattoo</label>
                    </div>
                    <div class="barang mt-2">
                      <input type="checkbox" class="form-check-input" id="bleaching" value="40000" name="produk" onclick="totalit()">
                      <label class="form-check-label" for="bleaching">Bleaching</label>
                    </div>
                  </div>
                  <div class="col mt-2 ">
                      <label class="form-check-label" for="potongrambut" >Rp 25.000</label>
                    <div class="mt-2">
                      <label class="form-check-label" for="keramas" >Rp 10.000</label>
                    </div>
                    <div class="mt-2">
                      <label class="form-check-label" for="hairtato" >Rp 5.000</label>
                    </div>
                    <div class="mt-2">
                      <label class="form-check-label" for="bleaching" >Rp 40.000</label>
                    </div>
                  </div>
                </div>
                <div class="garis"></div>
                <div class="row">
                  <div class="col mt-2">
                      <label class="ml-5" id="biayat">Biaya Tambahan</label>
                    <div class="mt-2">
                      <label class="ml-5" id="biayatot">Biaya Total</label>
                    </div>
                  </div>
                  <div class="col mt-2 ml-5">
                      Rp <input type="text" value="0" readonly="readonly" id="tot" >
                    <div class="mt-2">
                      Rp <input type="text" value="0" readonly="readonly" id="total">
                    </div>
                    <button type="button" class="btn btn-outline-success waves-effect mt-4 ml-4">Pesan</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
      </body>
    </html>