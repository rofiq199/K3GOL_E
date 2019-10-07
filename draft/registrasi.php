<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query("SELECT * FROM users WHERE id='$_POST[id]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("id Sudah Ada Yang Menggunakan");
              window.location="signup.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysqli_query("INSERT INTO users VALUES ('$_POST[id]', '$_POST[username]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="signup.php";
              </script>';
              exit();
    }
?>