<?php 
include "koneksi.php";
 session_start();
    $timezone = time() + (60 * 60 * 7); 
  $today = date("Ymd",$timezone); //untuk mengambil tahun, tanggal dan bulan Hari INI
  $username = $_SESSION['username'];
  $tanggal = gmdate("Y-m-d H:i:s",$timezone);
  $id = $_GET['id'];
  $alamat = $_POST['alamat'];
  $total = $_POST['total'];
   //cari id terakhir ditanggal hari ini
    $query1 = "SELECT max(kode_pesan) as maxID FROM pesan WHERE kode_pesan LIKE '$today%'";
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
   $query = "INSERT INTO pesan VALUES ('$NewID','$id', '".$username."', '".$tanggal."','$alamat','belum','$total')";
   $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    
   foreach ($_SESSION['cukur'] as $key => $val){
    $query3 = "INSERT INTO detail_pesan VALUES ('$NewID','$key','5000')";
    $hasil3 = mysqli_query($koneksi,$query3);
    }

    //unset($_SESSION['items']);
    //pesan sukses apa enggak
    if($sql == TRUE) { echo"Data sudah masuk";
      header("location: halamanpesan.php");}
    else {echo "Data gagal";}
    

?>