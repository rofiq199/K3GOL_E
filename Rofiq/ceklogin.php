<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="ROFIQ" AND $password=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:home.php");
    }else{
        header("location:Login.php?login_error");
    }
?>