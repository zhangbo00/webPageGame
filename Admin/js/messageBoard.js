$(function () {
	$('.table .glyphicon-remove').click(function () {
		var id = $(this).parents('tr').attr('id');
		$.post('handle.php?action=message_del', {'id':id}, function (data) {
			data = JSON.parse(data);
			console.log(data);
		})
	})

	$('.table .glyphicon-pencil').click(function () {
		var id = $(this).parents('tr').attr('id');
		window.location.href='message_answer.php?id='+id;
	})
})