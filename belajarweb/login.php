<?php 
	require 'fungsi.php';
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			
			if (password_verify($password, $row["password"])) {
				header("Location: menu.php");
				exit;
			}
		}

	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		
 	</title>
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
		<button type="submit" name="login">Login</button>

	</form>
 </body>
 </html>