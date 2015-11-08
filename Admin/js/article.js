$(function () {
	$(".glyphicon-remove").click(function (){
		var id = $(this).parents('tr').attr('id');
		
		$.post('articleEvent.php?action=article_del', {'id':id}, function (data) {
			alert(data);
			data = JSON.parse(data);
			if (data['code'] != 1) {
				alert(data.message);
			}
			else {
				window.location.reload();
				alert("成功");
			}
		})
	})
	$(".glyphicon-pencil").click(function (){
		var id = $(this).parents('tr').attr('id');
		window.location.href="setArticle.php?id="+id;
	})
});