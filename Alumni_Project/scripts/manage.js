
  	$('.bt1').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
	//	alert(frnd);
	//	alert(user);
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'accept'},
            success: function (data) {
               location.reload();
            }
        });
    });	
	
	$('.bt11').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'reject'},
            success: function (data) {
              location.reload();
            }
        });
    });
	
	$('.bt2').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'cancel'},
            success: function (data) {
             location.reload();
            }
        });
    });	
	
	$('.bt3').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'unfriend'},
            success: function (data) {
             location.reload();
            }
        });
    });	
	