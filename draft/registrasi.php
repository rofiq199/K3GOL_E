<?php 
    include "koneksi.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE id='$_POST[id]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("id Sudah Ada Yang Menggunakan");
              window.location="signup.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (id, username, password)
        VALUES ('$_POST[id]', '$_POST[username]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="signup.php";
              </script>';
              exit();
    }
?>