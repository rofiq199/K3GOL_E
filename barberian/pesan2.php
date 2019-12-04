<!DOCTYPE html>
<html>
<head>
	<title>Halaman Chekout</title>
</head>
<body>

<?php 
include "koneksi.php";
 session_start();
    $timezone = time() + (60 * 60 * 7); 
    $id = $_GET['id'];
  $today = date("Ymd",$timezone); //untuk mengambil tahun, tanggal dan bulan Hari INI
  $username = $_SESSION['username'];
  $tanggal = gmdate("Y-m-d H:i:s",$timezone);
   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT kode_order FROM order WHERE kode_order LIKE '$today%' order by kode_order DESC";
    $hasil = mysqli_query($koneksi,$query1);
    $data = mysqli_fetch_array($hasil);
    $idMax = $data['kode_order'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++; //nomor urut +1
   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $today .sprintf('%04s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini
   //proses simpan data id dengan id yg baru ke database
   $query = "INSERT INTO order VALUES($NewID,$id, '".$_SESSION['username']."', '".$tanggal."',null,belum,null)";
   $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    
//    foreach ($_SESSION['items'] as $key => $val){
//     $query3 = "INSERT INTO detail_order VALUES ('$NewID','$key')";
//     $hasil3 = mysqli_query($koneksi,$query3);
//     }

    //unset($_SESSION['items']);
    //pesan sukses apa enggak
    if($query) { echo"Data sudah masuk";}
    else {echo "Data gagal";}
    


?>
selamat Anda berhasil Cekout <a href="halproduk.php">
</body>
</html>