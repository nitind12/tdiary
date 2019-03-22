$(function(){
	$('#frmLogin').submit(function(){
		if($.trim($('#username').val()) == ''){
			alert('001: Please Enter Username');
		} else if($.trim($('#password').val()) == ''){
			alert('002: Please Enter password');
		} else {
			$('#frmLogin').submit();
		}
		return false;
	});
});