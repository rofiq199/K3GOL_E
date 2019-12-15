$(document).ready(function(){		
    $('.lihat').click(function(){
        if($(this).is(':checked')){
            $('#password').attr('type','text');
        }else{
            $('#password').attr('type','password');
        }
    });
$('#tombollogin').click(function (){
    var username = $('#username').val();
    var password = $('#password').val();
    if (username !="" && password !=""){
        return true;
    }else{
        alert('harap diisi!!!');
        return false;
    }
});
$('#tombolloginbs').click(function (){
    var username = $('#usernamebs').val();
    var password = $('#passwordbs').val();
    if (username !="" && password !=""){
        return true;
    }else{
        alert('harap diisi!!!');
        return false;
    }
});
});