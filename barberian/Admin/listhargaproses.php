<?php 
include "../koneksi.php";
$ref = $_GET['ref'];
$act =$_GET['act'];
$nama =$_POST['nama'];
$harga =$_POST['harga'];
    if ($act == 'edit'){
        $query = "UPDATE harga_barber set nama_ck='$nama' where kode_antrian='$kode'" ;
        $sql = mysqli_query($koneksi,$query);
    }else if ($act == 'proses'){
        $query1 = "UPDATE antrian SET status_antrian= 'proses' WHERE kode_antrian='$kode'";
        $sql1 = mysqli_query($koneksi,$query1);
    }else if ($act == 'selesai'){
        $query2 = "UPDATE antrian set status_antrian='selesai' where kode_antrian='$kode'";
        $sql2 = mysqli_query($koneksi,$query2);
    }else if($act == 'batal'){
        $query = "UPDATE antrian set status_antrian='batal' where kode_antrian='$kode'" ;
        $sql = mysqli_query($koneksi,$query);   
    }
header ("location:" . $ref);


?>