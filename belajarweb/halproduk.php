<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

    <!--My CSS-->
    <link rel="stylesheet" href="halproduk.css">
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
                  <a class="dropdown-item" href="lihat_antrian.php" >Lihat Antrian</a>
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
<!-- akhir navbar -->
<div class="container">
<a href="pcarte.php">keranjang </a>
    <div class="mt-5 row">
    <?php
      include "koneksi.php";
      $query=" SELECT * from  produk join data_barber on produk.username_bs=data_barber.username_bs ";
      $result=mysqli_query($koneksi,$query) or die(mysqli_error());
      $no=1;
      //proses menampilkan data
      while($rows=mysqli_fetch_object($result)){
      ?>
        <div class="col-sm-4 mt-2" >
          <div class="card">
              <img src="admin/img/<?=$rows -> foto_produk;?>"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$rows -> nama_produk;?></h5>
              <p class="card-text">Rp. <?=number_format($rows -> harga_produk);?></p>
              <h6 class="card-title"><?=$rows -> nama_bs;?></h6>
              <p><a href="cart.php?id=<?php echo $rows->kode_produk; ?>&action=add">Order Now</a></p>
              <p><a href="pcart.php?act=add&amp;barang_id=<?=$rows->kode_produk?>&amp;ref=halproduk.php">belii</a></p>
              <button class="add btn btn-success" data-id="<?=$rows -> kode_produk?>" data-nama="<?=$rows -> nama_produk?>" data-qty="1" data-price="<?=$rows -> harga_produk?>"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Add</button>
            </div>
          </div>
        </div>
            
                <?php
                  }
                  ?>
              </div>
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!--keranjang belanja-->
    <div id="cart" class=" bookmark-height-well well well-sm table-responsive"> 
        <center><h2>Keranjang Belanja Toko barber </h2><p>Anggap saja ini keranjang anda</p></center><hr>
        <ul id="cartBody" class="list-group"></ul>
        <div id="totalCart" class="col-lg-12"></div>
  </div>
  

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
  var mycart = [];
        $(function () {
            if (localStorage.mycart)
            {
                mycart = JSON.parse(localStorage.mycart);
                showCart();
            }
        });

      
      // mengambil data button ketika button dengan class add di click
      $('.add').click(function(){

        var id   = $(this).data("id");
        var nama   = $(this).data("nama");
        var qty   = $(this).data("qty");
        var price   = $(this).data("price");
        var subtotal = price * qty;
        addToCart(id,nama,qty,price,subtotal);   //kirimkan nilai ke fungsi addToCart, berhati - hati penggunaan inserting data usahakan serverside process, ini hanya untuk pembelajaran

      })

      function addToCart(id,nama,qty,price,subtotal) {
           //cek data in cart then update qty
            for (var i in mycart) {
                if(mycart[i].Id == id)
                {
                    //jika data available then
                    mycart[i].Qty = mycart[i].Qty+qty;
                    mycart[i].Subtotal = subtotal * mycart[i].Qty;
                    showCart(); //panggil fungsi showCart
                    saveCart(); // panggil fungsi saveCart untuk insert data
                    return;
                  
                }
            
            }


            // jika tidak ada insert all

            var item = { Id: id, Nama:nama, Qty:qty, Price:price, Subtotal:subtotal}; 
            mycart.push(item);
            saveCart();
            showCart();
        }

        function deleteItem(index){
            mycart.splice(index,1); // hapus item berdasarkan index
            showCart();
            saveCart();
        }

        function saveCart() {
            if ( window.localStorage)
            {
                localStorage.mycart = JSON.stringify(mycart);
            }
        }

        function showCart() {
          if (mycart.length == 0) { //cek nilai mycart, jika kosong maka hidden div dengan id cart
                $("#cart").css("visibility", "hidden");
                return;
          }

          $("#cart").css("visibility", "visible"); // jika tersedia maka tampilkan 
          $("#cartBody").empty();

          for (var i in mycart) { //tampilkan data dari local storage mycart, template bisa anda sesuaikan
            var item = mycart[i];
            var row = '<div class="media"><div class="media-left media-top"></div><div class="media-body"><div class="col-lg-12"><div class="col-lg-10"><p>Nama Produk <span style="padding-left:0.8em">: </span>'
                        + item.Nama +'</p><p>Jumlah <span style="padding-left:4em">:</span> '+ item.Qty +'</p><p>Harga <span style="padding-left:4.5em">:</span> '+ item.Price +'</p></div><div class="col-lg-2"><p>Subtotal <span style="padding-left:4em">:</span> '+ item.Subtotal +'</p><br><button class="btn btn-danger btn-circle" onclick="deleteItem(' 
                              + i + ')"><i class="fa fa-trash"  > </i>hapus</button></div></div></div></div><hr>' ;
    
            $("#cartBody").append(row); //append ul dengan id cartbody
          }

          // untuk total
          var total = 0;
          for(var i = 0; i < mycart.length; i++) {
              total += mycart[i].Subtotal; //jumlahkan keseluruhan row subtotal dari mycart untuk mendapatkan total
          }
          totalCart.innerHTML='<label>Total Belanja Anda : '+total+'  </label><br><br><button class="cekout">Chekout</button><br>'; 
          //isikan div dengan id totalcart dengan nilai diatas
        }
</script>
      <script type="text/javascript">
      $(document).ready(function(){
        $(".cekout").click(function(){
          var data = $('.item').serialize();
          $.ajax({
            type: 'POST',
            url: "aksi.php",
            data: data,
            success: function() {
              $('.tampildata').load("tampil.php");
            }
          });
        });
      });
      </script>
    </body>
  </html>