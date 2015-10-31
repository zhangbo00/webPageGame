$(function () {
	$(".message>textarea").on('keydown', function (event) {
		if(event.ctrlKey && event.keyCode == 13) {
			$(".msg_submit").click();	
		}
	})
	$(".message>button").click(function() {
		var content = $(".message>textarea").val();
		$.post('handle.php?action=msgSubmit', {'content': content}, function(data) {
			if (data.code == 0) {
				alert(data.message);
			} else {
				// window.location.reload();
			}
		});
	});
/*	$(".message_item li,.message_item button").mouseover(function () {
		
	}).mouseout(function () {
		
	}); */
	$(".message_item .reply").click(function() {
		// console.log(($(this).next()).next());
		($(this).next('.reply_content')).slideToggle();
		// $(this).next('textarea').slideDown();
		// $("p").slideToggle("slow");
	});
	$(".reply_content .submit").click(function () {
		var message = $(this).prev('textarea').val();
		console.log($(this).parent('.message_item'));
		// console.log($(this).parent('.message_item').attr('message-id'));
	})
})