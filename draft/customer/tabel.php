<?php require_once 'koneksi.php' ?>

<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
</head>
<body>

<center>
<table  border='1' Width='800'>  
<tr>
    <th> Uername </th>
    <th> Email </th>
    <th> password </th>
    
</tr>
<center>

<?php  
// Perintah untuk menampilkan data

$hasil= mysqli_query ($koneksi,"SELECT * FROM login_customer") ;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
 echo "    
        <tr>
        <td>".$data['username_cs']."</td>
        <td>".$data['email']."</td>
        <td>".$data['password']."</td>
        </tr> 
        ";
        
}

?>

</table>
</body>
</html>