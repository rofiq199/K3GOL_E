<html>
    <head>
        <title>AJAX LOGIN - Harviacode.com</title>
    </head>
    <body>
        <form action="" onsubmit="ajax_login(); return false">
            <input type="text" name="username" id="username"/>
            <input type="password" name="password" id="password"/>
            <input type="submit" name="submit" value="login" />
        </form>
        <div id="hasil"></div>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        function ajax_login(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            $.ajax({
                url:"ceklogin1.php",
                type:"POST",
                data:{
                    username:username,
                    password:password
                },
                success:function(result){
                    $("#hasil").html(result);
                }
            });
        }
    </script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</html>