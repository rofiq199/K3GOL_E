<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id='$_POST[id]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("id Sudah Ada Yang Menggunakan");
              window.location="signup.php";
              </script>';
              exit();
    }
    else {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password    =md5('$_POST[password]');
        mysqli_query($koneksi,"INSERT INTO tb_user VALUES ('$id', '$username', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="signup.php";
              </script>';
              exit();
    }
?>