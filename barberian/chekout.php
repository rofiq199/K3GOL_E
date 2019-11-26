<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi Menggunakan MD5 - WWW.MALASNGODING.COM</title>
</head>
<body>

<?php 
include "koneksi.php";

  $nama = $_POST['nama']; //mengambil inputan NAMA
  $today = date("Ymd"); //untuk mengambil tahun, tanggal dan bulan Hari INI
  $username = $_SESSION['username'];


   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(kode_jual) as maxID FROM penjualan WHERE kode_jual LIKE '$today%'";
    $hasil = mysqli_query($query1);
    $data = mysqli_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++; //nomor urut +1
   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $today .sprintf('%04s', $NoUrut);
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini

   
   //proses simpan data id dengan id yg baru ke database
    $query2 = "INSERT INTO penjualan (id,nama) VALUES ('$NewID','$username')";
    $hasil2 = mysql_query($query2);
    
    //pesan sukses apa enggak
    if($hasil2) { echo"Data sudah masuk";}
    else {echo "Data gagal";}
    mysql_close();
    
header('Location:liat.php');


?>
selamat Anda berhasil Cekout
</body>
</html>