
function loadChat(dv,recp){
	var usr = document.getElementById("usr").value;
	$("div#chat-with").attr('value', recp);
	var name = $(dv).data("title");
	document.getElementById("chat-with").innerHTML = name;
	$.ajax({
		type : "POST",
		url : 'message.php',
		dataType: 'html',
		data : {'user':usr, 'rec':recp, 'action':'read'},
		success : function (response){
			//alert(response)
			$("#boxr").html(response);
		}
	}); 
	$(this).delay(100).queue(function() {
		$("div.chat-history").scrollTop($('div#boxr').height());
		$(this).dequeue();
	});
}

function sendMsg(){

	var dt = new Date();
	var time = dt.getHours() + ":" + dt.getMinutes();
	var textarea = document.querySelector('#message-to-send');
	var tex = $("textarea#message-to-send").val();
	var usr = document.getElementById("usr").value;
	var to = $("div#chat-with").attr('value');
	textarea.value = '';	
	$.ajax({
		type : "POST",
		url : 'message.php',
		data : {'user':usr, 'rec':to, 'tm':time, 'msg':tex, 'action':'send'},
		success : function (data){
			
		}
	}); 
	$("div.chat-history").scrollTop(500);	
}
