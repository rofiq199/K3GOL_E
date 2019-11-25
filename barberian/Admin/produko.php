<?php 
    // Load file koneksi.php 
    $koneksi = mysqli_connect("localhost","root","","barberian");
      
    // Check connection
    if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	session_start();
    $username = $_SESSION['username'];
    
    $kode = $_POST['kode1'];
    $query = "INSERT INTO pepek VALUES('".$kode."')";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    echo "data berhasil disimpan ";
    echo "<a href='produk.php'>form</a>" 
?>