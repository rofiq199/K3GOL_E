<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['password'];


// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from data_barberman where username_bm='$username' and password_bm='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $username;
	$_SESSION['status'] = "login";
	header("location:/K3GOL_E/barberian/katalog.html");
}else{
	echo "salah!!!! ";
}
?>