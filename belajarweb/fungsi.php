<?php 
//Koneksi
	$conn = mysqli_connect("localhost", "root", "", "penjualan");
//Registrasi
	function registrasi($data){
		global $conn;
		$username = $data["username"];
		$password = $data["password"];
		$konfim =  $data["konfim"];

		$hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
		if(mysqli_fetch_assoc($hasil)){
			echo "<script>Username sudah terdaftar</script>";
			return false;
		}


		if ($password !== $konfim) {
			echo "<script>alert('Password salah');</script>";
			return false;
		}
	//Enkripsi
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn, "INSERT INTO tb_user VALUES ('', '$username', '$password')");

		return mysqli_affected_rows($conn);
	}
	function pupuk($query){
		//ambil data pupuk
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	//tambah data
	function tambah($data){
		global $conn;
		$kode = $data["kode"];
		$nama = $data["nama"];
		$stok = $data["stok"];
		$hbeli = $data["hbeli"];
		$hjual = $data["hjual"];

		$query = "INSERT INTO tb_pupuk VALUES ('$kode','$nama','$stok', '$hbeli', '$hjual')";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}
 ?>