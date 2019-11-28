<?php
 include "koneksi.php";
 
 $nama=$_POST["nama"];
 
  
 $result=mysqli_query($koneksi,"SELECT * FROM data_barber where nama_bs like '%$nama%' ");
 $found=mysqli_num_rows($result);
 
 if($found>0){
    while($row=mysqli_fetch_array($result)){
    echo "<li>$row[nama_bs];</br>
            <a>$row[username_bs]</a></li>";
    }   
 }else{
    echo "<li>Tidak ada artikel yang ditemukan <li>";
 }
?>