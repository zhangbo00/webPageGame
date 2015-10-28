$(function () {
	$(".message>textarea").on('keydown', function (event) {
		if(event.ctrlKey && event.keyCode == 13) {
			$(".msg_submit").click();	
		}
	})
	$(".message>button").click(function() {
		var content = $(".message>textarea").val();
		$.post('handle.php?action=msgSubmita', {'content': content}, function(data, textStatus, xhr) {
			console.log(data);
		});
	});
})