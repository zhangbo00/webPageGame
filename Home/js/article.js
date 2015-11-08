// alert("article");
$(function () {
	$("#text").hide();
	$('.table .button').click(function () {
		var id = $(this).parents('tr').attr('id');
		window.location.href="selectArticle.php?id="+id;
	});
})