<!docname html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="keranjang.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b0af4bcb3.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-8">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <h6>Pilih Semua Item</h6>
          </div>
        </div>
      </div>
      <div class="card mt-2">
        <div class="card-header" name="judul">
          <h6>Ini Nama Tokonya</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4 col-xl-3">
              <img class="img-thumbnail" src="https://akcdn.detik.net.id/community/media/visual/2015/06/25/fd06dfea-00ae-4f11-8ce2-d6e41a00aad7_43.jpg?w=780&q=90" alt="">
            </div>
                <div class="col-lg-7 col-xl-8">
                  <div class="row">
                    <a href="">Madafaka</a>
                    <h6 class="ml-auto">Rp 0</h6>
                  </div>
                  <div class="def-number-input number-input col">
                    <a onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="fas fa-minus-square"></a>
                    <input class="quantity" min="0" name="quantity" value="1" type="number" disabled>
                    <a onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="fas fa-plus-square"></a>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
        <div class="container">
            <p class="card-title"><strong>Ringkasan Belanja</strong></p>
              <div class="border-bottom"></div>
            <p class="card-text">Total Harga</p>
            <p class="card-text">Rp 0</p>
              <div class="border-bottom"></div>
            <a href="#" class="btn btn-success text-white"><strong>Beli</strong></a>
            </div>
        </div>
</div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>