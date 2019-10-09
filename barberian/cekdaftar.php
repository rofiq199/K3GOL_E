<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM data_customer WHERE username_cs='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("id Sudah Ada Yang Menggunakan");
              window.location="pendaftaran.php";
              </script>';
              exit();
    }
    else {
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no = $_POST['no'];
        $alamat = $_POST['alamat'];
        $password    =md5('$_POST[password]');
        mysqli_query($koneksi,"INSERT INTO data_customer VALUES ('$username','$email', '$nama','$alamat','$no','$password')");
        
        echo '<script language="javascript">
             alert ("Registrasi Berhasil Di Lakukan!");
             window.location="index.html";
              </script>';
              exit();
    }
?>