<!doctype html>
<?php include "koneksi.php";
include "navbar.php";
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
    <link rel="stylesheet" href="regcustomer.css">
    <script  href="script.js"></script>
    <title>Barberian</title>
  </head>
  <body>
    <!-- Form -->
    <form action="regcustomerp.php" method="POST" name="form1" enctype="multipart/form-data" >
    <div class="container">
        <h3 class="text-center">Form Pendaftaran</h3>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Upload Foto</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control-plaintext" name="foto" id="foto">
                </div>
            </div>
        
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="">
              </div>
            </div>
            <div class="form-group row">
                    <label for="alamat"  class="col-sm-2 col-form-label">Alamat Rumah</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" type="text" name="alamat" rows="3"></textarea>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="no" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="tel" pattern="^/d{10}" title="masukkan angka minimal 10" class="form-control" name="no" value="">
                    </div>
                  </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" pattern="(?=.*/d)(?=.*[a-z]).{8,}" title="Password minimal harus 8!!!" class="form-control" id="password2" placeholder="Password" value='' name="password">
                    </div>
            </div>
            <div class="form-group row"> 
                <label for="ConPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label> 
                <div class="col-sm-10"> 
                    <input type="password" id="konpassword2" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" value="" data-bv-notempty='true' data-bv-notempty-message='The password confirmation is required and cannot be empty' data-bv-identical='true' data-bv-identical-field='password' data-bv-identical-message='The password and its confirmation are not the same' /> 
                    <small class="form-text text-muted">Ulangi password diatas sekali lagi. <br> <strong id="ingat"></strong></small> 
                </div> 
            </div>  
            <div class="col-sm-10 offset-sm-2">
                    <button type="submit" id='simpan' class="btn btn-success mb-2">Simpan</button>
            </div>
          </form>
    </div>
    <!-- akhir Form -->
  <!-- akhir Navbar -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
       $(document).ready(function() {
            $("#simpan").on('click',function () {
                var password = $("#password2").val();
                var confirmPassword = $("#konpassword2").val();
                var foto =$('#foto').val();
                if(foto == ""){
                  alert('foto harap diisii!!!');
                  return false;
                }else if (password != confirmPassword) {
                    // alert("Passwords do not match.");
                    $('#ingat').append("Konfirmasi Password Tidak Sesuai !!!!");
                    return false;
                }else{
                return true;
                }
            });
        });    
    </script>
  </body>
</html>