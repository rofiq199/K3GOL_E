<html>
    <head>
        <title>AJAX LOGIN - Harviacode.com</title>
        <style>
        .pesan{
	display: none;
	color: black;	
	margin: 10px;
}
        </style>
    </head>
    <body>
        <form class='form'action="" method="post" onsubmit="ajax_login(); return false">
            <input type="text" name="username" id="username"/>
            <input type="password" name="password" id="password"/>
            <span class="pesan pesan-nama">Anda harus mengisi username!</span><br/>
            <span class="pesan pesan-password">Anda harus mengisi password!</span><br/>
            <span class="pesan pesan-login">Anda berhasil login</span>
            <input type="submit" id="login"  name="submit" value="login"/>
            <button class="tombol" >tombol</button>
        </form>
        <div id="hasil"></div>
    </body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        function ajax_login(){
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                url:"ceklogin.php",
                type:"POST",
                data:{
                    username:username,
                    password:password
                },
                success:function(result){
                    $("#hasil").html(result);
                    alert('login berhasil')
                    windows.location="index.php"
                }
            });
        }
    </script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('.tombol').click(function(){
			var nama = $("#username").val();
			alert(nama);
		});		
	});
</script>
    <script type="text/javascript">
	$(document).ready(function() {
		$('.form').submit(function() {
            var nama = $('#username').val();
            var password = $('#password').val();
            var data = $(".form").serialize();			
 
			if (nama == "") {				
				$(".pesan-nama").css('display','block');
				return false;
			} else if (password == "" ){
                $(".pesan-password").css('display','block');
                return false;
            }else {
                $.ajax({
                    type : 'POST',
                    url  : 'ceklogin.php'
                    data : data,
                    succes : function{
                        $(".pesan-login").css('display','block');
                        alert('hai');
                    }
                })
            }
		});
	});
</script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</html>