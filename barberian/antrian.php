
<!DOCTYPE html>
<html>
<head>
	<title>antrian</title>
</head>
<body>
<?php 
include "koneksi.php";
 session_start();
    $id = $_GET['id'];
    $timezone = time() + (60 * 60 * 7); 
  $today = date("Ymd",$timezone); //untuk mengambil tahun, tanggal dan bulan Hari INI
  $username = $_SESSION['username'];
  $tanggal = date("Y-m-d H:i:s",$timezone);
   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(kode_antrian) as maxID FROM antrian WHERE kode_antrian LIKE '$today%'";
    $hasil = mysqli_query($koneksi,$query1);
    $data = mysqli_fetch_array($hasil);
    $idMax = $data['maxID'];

   //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++; //nomor urut +1
   
   //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
    $NewID = $today .sprintf('%04s', $NoUrut);
    echo "$NewID";
//$today nanti jadinya misal 20160526 .sprintf('%04s', $NoUrut) urutan id di tanggal hari ini
   //proses simpan data id dengan id yg baru ke database
   $query3 = "INSERT INTO antrian VALUES ('$NewID' ,'$id','$username','$tanggal','2','belum')";
   $sql3 = mysqli_query($koneksi, $query3); // Eksekusi/ Jalankan query dari variabel $query
    //pesan sukses apa enggak
    if($sql3 == TRUE ) { echo"Data sudah masuk";}
    else {echo "Data gagal";}
    


?>

 selamat Anda berhasil Cekout <a href="halproduk.php">
</body>
</html>