$(document).ready(function(){

$('.bt').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'send'},
            success: function (data) {
               location.reload();
            }
        });
    });
});