<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
        echo "<h2>Halo </h2>";
        echo  $_SESSION['username'];
        echo "<a href='logout.php'>Logout</a>";
    }else{
        echo header("location:form_login.php");
    }