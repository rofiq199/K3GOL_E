<!DOCTYPE html>
<html>
<head>
    <title>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL - Tutorial</title>    
</head>
<body>
    <h2>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL</h2>
    <h4>Silahkan Isi Data Pada Kolom Tersedia!</h4>
    <form action="registrasi.php" method="post" name="form1">        
        <table>
            <tr>
                <td width="120">Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td width="120">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>