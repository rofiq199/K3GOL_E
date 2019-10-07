<?php 
	require 'fungsi.php';
	$pupuk = pupuk("SELECT * FROM tb_pupuk");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama</title>
</head>
<body>
	<h1>Daftar Pupuk</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Kode Pupuk</th>
			<th>Nama Pupuk</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
		</tr>
		<?php foreach ($pupuk as $row) : ?>
		
		<tr>
			<td><?= $row["kd_pupuk"]?></td>
			<td><?= $row["nama_pupuk"]?></td>
			<td><?= $row["stok"]?></td>
			<td><?= $row["harga_beli"]?></td>
			<td><?= $row["harga_jual"]?></td>
			<td>
				<a href="">ubah</a> | <a href="">hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
		
</body>
</html>