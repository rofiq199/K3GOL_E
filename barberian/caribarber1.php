<?php
 include "koneksi.php"; 
?>
  <hr class="my-4">
<?php
if  (isset($_GET['id'])){
$nama = $_GET['id'];
$query=" SELECT * from  data_barber where nama_bs like '%$nama%' ";
$result=mysqli_query($koneksi,$query) or die(mysqli_error());
$no=1;
}else{
   $query= "SELECT * from  data_barber ";
   $result=mysqli_query($koneksi,$query) or die(mysqli_error());
}
//proses menampilkan data
while($rows=mysqli_fetch_object($result)){
?>
  <!-- Grid row -->
  <div class="mt-3 card">
  <div class="card-body">
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="admin/img/<?=$rows -> foto;?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong><?=$rows -> nama_bs;?></strong></h3>
      <!-- Excerpt -->
      <p class="Deskripsi"><?=$rows -> alamat_bs;?><br>
      <?=$rows -> jam_buka;?>-<?=$rows -> jam_tutup;?></p>
      <!-- klik ke detail barbershop -->
      <a type="button" class="btn btn-outline-primary btn-rounded waves-effect" href="detailbarber.php?id=<?=$rows -> username_bs;?>">Lihat Detail</a>
      <div class="border"></div>
      <p class="mt-5 status">status <?=$rows -> username_bs;?><br>
    </div>
    <!-- Grid column -->
  </div>  
  </div>
  </div>
  <!-- Grid row -->
<?php
}
?>