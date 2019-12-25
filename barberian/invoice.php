<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="invoice.css">
    
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <i class="fas fa-arrow-left"></i>
        Detail Pembelian
    </a>
    </nav>
    <!--  -->
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <div class="container">
                <div class="card mt-1" style="width: 31rem;">
                    <div class="card-body">
                        <p class="card-text">Status</p>
                        <h6 class="transaksi-sukses">Transaksi Berhasil</h6>
                        <!-- Transaksi Jika gagal -->
                        <h6 class="transaksi-gagal">Transaksi Gagal</h6>
                        <!-- akhir -->
                        <h6 class="verifikasi">Proses Verifikasi</h6>
                        <div class="border-bottom"></div>
                        <div class="row mt-2">
                            <div class="col">
                                <p class="card-text">Tanggal Transaksi</p>
                            </div>
                            <div class="col-4 ml-5">
                                <p class="card-text tanggal">ini tempatnya tanggal</p>
                            </div>
                        </div>
                        <div class="border-bottom"></div>
                        <p class="card-text mt-2">Ini kode Pembelian</p>
                    </div>
                </div>
                <div class="card detil" style="width: 31rem;">
                    <div class="card-body">
                        <p class="card-title">Detail Pembayaran</p>
                        <div class="row mt-2">
                            <div class="col">
                                <p class="card-text">Nama Produk</p>
                                <!-- Perulangan mulai dari sini -->
                                <p class="card-text produk">produk</p>
                                <!-- akhir -->
                            </div>
                            <div class="col-4 ml-5">
                                <p class="card-text">Harga</p>
                                <!-- perulangan mulai dari sini -->
                                <p class="card-text produk">disini harga</p>
                                <!-- akhir -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card detil" style="width: 31rem;">
                    <div class="card-body">
                        <p class="card-title">Informasi Pembayaran</p>
                        <div class="row mt-2">
                            <div class="col">
                                <p class="card-text">Metode Pembayaran</p>
                            </div>
                            <div class="col-4 ml-5">
                                <p class="card-text tanggal">Langsung</p>
                            </div>
                            
                        </div>
                        <div class="border-bottom"></div>
                        <div class="row mt-2">
                            <div class="col">
                                <h6 class="card-text tanggal">Total Pembayaran</h6>
                            </div>
                            <div class="col-4 ml-5">
                                <p class="card-text harga">Langsung</p>
                            </div>
                        </div>
                        <div class="border-bottom"></div>
                        <center><button class="add btn btn-success"></i> Beli Lagi</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>