<?php 
    include "koneksi.php";
    $cek_user=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM login_barbershop WHERE username='$_POST[username]'"));
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
        mysqli_query($koneksi,"INSERT INTO login_barbershop VALUES ('$username', '$email', '$password','1')");
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="signup.php";
              </script>';
              exit();
    }
?>