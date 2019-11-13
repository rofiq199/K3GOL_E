<!DOCTYPE html>
<html>
<head>
    <title>Dftar</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php
      // Load file koneksi.php 
      $koneksi = mysqli_connect("localhost","root","","barberian");
      
      // Check connection
      if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
      }
      // Ambil data NIS yang dikirim oleh index.php melalui URL
      // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
      $query = "SELECT * FROM penjualan where username_cs='dodhy' ";
      $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
      ?>
<table>
  <thead>
  <tr>
  <th>kode order</th>
  <th>nama bs</th>
  <th>nama bm</th>
  <th>nama cs </th>
  </tr>
  </thead>
<tbody>
<?php
while($data= mysqli_fetch_assoc($sql)){ 
?>
      <tr>
      <th><?php echo $data['kode_jual']; ?></th>
      <th><?php echo $data['username_cs']; ?></th>
      <th><?php echo $data['tanggal_jual']; ?></th>
      <th><?php echo $data['total_harga']; ?></th>
      </tr>
<?php }?>
</tbody>
</table>
</body>
</html>