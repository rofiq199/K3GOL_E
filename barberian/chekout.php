<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi Menggunakan MD5 - WWW.MALASNGODING.COM</title>
</head>
<body>

<?php 
include "koneksi.php";
 session_start();
  $today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI
  $username = $_SESSION['username'];
  $tanggal = date("Y-m-d H:i:s");

   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(kode_jual) as maxID FROM penjualan WHERE kode_jual LIKE '$today%'";
    $hasil = mysqli_query($koneksi,$query1);
    $data = mysqli_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++; //nomor urut +1
   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $today .sprintf('%04s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini
   //proses simpan data id dengan id yg baru ke database
   $query = "INSERT INTO penjualan VALUES($NewID, '".$_SESSION['username']."', '".$tanggal."', 3 )";
   $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    
   foreach ($_SESSION['items'] as $key => $val){
    $query3 = "INSERT INTO detail_penjualan VALUES ('$NewID','$key','$val')";
    $hasil3 = mysqli_query($koneksi,$query3);
    }
    //pesan sukses apa enggak
    if($query) { echo"Data sudah masuk";}
    else {echo "Data gagal";}
    


?>
selamat Anda berhasil Cekout <a href="halproduk.php">
</body>
</html>