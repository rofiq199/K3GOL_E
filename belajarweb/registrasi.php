<?php
	require 'fungsi.php';
	if (isset($_POST["submit"])) {
		if ( registrasi($_POST) > 0) {
			echo "<script>alert('user baru berhasil ditambahkan');</script>";
			
		}else{
			echo mysqli_error($conn);
		}
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Registrasi</h1>
	<form action="" method="post">
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="konfim">Konfirmasi Password :</label>
			<input type="password" name="konfim" id="konfim">
		</li>
		<button type="submit" name="submit">Daftar</button>

	</form>
</body>
</html>