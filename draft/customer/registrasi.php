<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM login_customer WHERE username_cs='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("id Sudah Ada Yang Menggunakan");
              window.location="signup.php";
              </script>';
              exit();
    }
    else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password    =md5('$_POST[password]');
        mysqli_query($koneksi,"INSERT INTO login_customer VALUES ('$username', '$email', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="signup.php";
              </script>';
              exit();
    }
?>