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
        <form class='form' onsubmit="ajax_login(); return false">
            <input type="text" name="username" id="username"/>
            <input type="password" name="password" id="password"/>
            <span class="pesan pesan-nama">Anda harus mengisi username!</span><br/>
            <span class="pesan pesan-password">Anda harus mengisi password!</span><br/>
            <span class="pesan pesan-login">Anda berhasil login</span>
            <input type="submit" id="login"  name="submit" value="login"/>
            <button class="tombol" >tombol</button>
        </form>
        <p>   <?php 
        session_start();
        if (!isset($_SESSION['username'])){
           
        }else{
            echo $_SESSION['username'];
        }
        ?>haii</p>
        <div id="hasil">
     
        </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

     <!-- <script src="../barberian/js/jquery-3.4.1.min.js"></script> -->
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
        <!-- <script type="text/javascript">
	$(document).ready(function() {
		$('.form').on('submit' ,function(e) {
            e.preventDefault();
            var nama = $('#username').val();
            var password = $('#password').val();
            var data = $(".form").serialize();
            console.log(nama);	
                $.ajax({
                    type : $('.form').attr('method'),
                    url  : $('.form').attr('action'),
                    data : $('.form').serialize(),
                    succes : function(data){
                        $(".pesan-login").css('display','block');
                    }
                })
                
                        $('#hasil').load('ceklogin.php');
                       

		});
	});
</script> -->
<script type="text/javascript">
        function ajax_login(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            $.ajax({
                url:"ceklogin.php",
                type:"POST",
                data:{
                    username:username,
                    password:password
                },
                success:function(result){
                    //$("#hasil").html(result);
                    alert('berhasil login');
                    w
                    // window.location.href="index2.php"
                }
            });
        }
    </script>
     <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
</body>
</html>