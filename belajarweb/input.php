<?php  
	require 'fungsi.php';
	if(isset($_POST["tambah"])){
		if (tambah($_POST) > 0) {
			echo "<script>alert('Data berhasil ditambahkan');</script>";
			header("Location : menu.php");
			exit;
		}else{
			echo "<script>alert('Gagal menambahkan data');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tambah Data Pupuk</h1>
	<form action="" method="post">
	<li>
		<label for = "kode">Kode Pupuk</label>
		<input type="text" name="kode" id="kode">
	</li>
	<li>
		<label for = "nama">Nama Pupuk</label>
		<input type="text" name="nama" id="nama">
	</li>
	<li>
		<label for = "stok">Stok</label>
		<input type="text" name="stok" id="stok">
	</li>
	<li>
		<label for = "hbeli">Harga beli</label>
		<input type="text" name="hbeli" id="hbeli">
	</li>
	<li>
		<label for = "hjual">Harga jual</label>
		<input type="text" name="hjual" id="hjual">
	</li>
		<button type="submit" name="tambah">Tambah Data</button>
	</form>
</body>
</html>