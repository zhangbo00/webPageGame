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
})