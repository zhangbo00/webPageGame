// alert("article");
$(function () {
	$("#text").hide();
	$('.table .button').click(function () {
		var id = $(this).parents('tr').attr('id');
		$.post('selectArticle.php?action=select', {'id':id}, function (data) {
			var data = JSON.parse(data);
			if (data['code'] != 1) {
				alert(data.message);
			}
			else {
				$("#title").html(data.title);
				$("#date").html(data.date);
				$("#content").html(data.content);
				alert("查询成功");
				$("#text").show();
			}
		})
	});
})