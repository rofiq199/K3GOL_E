<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
		<form method=post action= "ceklogin.php"> 
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
                <a class="link" href="https://www.google.com">kembali</a>
                <br/>
			</center>
        </form>
        <center>
        <button type="button" class="b1">login google</button>
        <button type="button" class="b2">login facebook</button>
        </center>
        
	</div>
 
 
</body>
</html>