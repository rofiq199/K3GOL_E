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
        <form class='form' action="ceklogin.php" method="post" >
            <input type="text" name="username" id="username"/>
            <input type="password" name="password" id="password"/>
            <span class="pesan pesan-nama">Anda harus mengisi username!</span><br/>
            <span class="pesan pesan-password">Anda harus mengisi password!</span><br/>
            <span class="pesan pesan-login">Anda berhasil login</span>
            <input type="submit" id="login"  name="submit" value="login"/>
            <button class="tombol" >tombol</button>
        </form>
        <div id="hasil"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

     <script src="../barberian/js/jquery-3.4.1.min.js"></script>
     <!-- <script type="text/javascript">
	$(document).ready(function(){
		$('.tombol').click(function(){
			var nama = $("#username").val();
            var pass = $("#paswword").val();
           $.post("ceklogin.php",{
               username : nama,
               password : pass
           },function(data,status){
               $("#hasil").load('ceklogin.php');
           }); 
		});		
	});
    </script> -->
    <!-- <script type='text/javascript'>
    $(document).ready(function(){
    $('#username').on('keyup',function() {
        $('#hasil').load('username.php?id=' + $('#username').val());
        console.log($('#username').val())

    });

});
    </script> -->
        <script type="text/javascript">
	$(document).ready(function() {
		$('.form').on('submit' ,function(e) {
            e.preventDefault();
            var nama = $('#username').val();
            var password = $('#password').val();
            var data = $(".form").serialize();			
                $.ajax({
                    type : $('.form').attr('method'),
                    url  : $('.form').attr('action'),
                    data : $('.form').serialize(),
                    succes : function(data){
                        $(".pesan-login").css('display','block');
                    }
                })
                alert('hai');
                        $('#hasil').load('ceklogin.php');
                        console.log(nama);

		});
	});
</script>
</body>
</html>