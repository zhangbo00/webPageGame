$(function () {

	$('textarea').on('input',function () {
		var content = $(this).val(); 
		if (content.length>150) {
			$(this).val(content.substring(0,150)); 
			alert("请不要超过150字");
		};
	})

	$(".message>textarea").on('keydown', function (event) {
		if(event.ctrlKey && event.keyCode == 13) {
			$(".message button").click();	
		}
	})

	$(".message button").click(function () {
		var data = []; 
		data['content'] = $(this).prev('textarea').val();
		data['root'] = $("#root").val();
		data['type'] = 1;
		if ($.trim(data['content']).length==0) {
			alert("回复不能为空");
			return;
		}
		$.post('handle.php?action=msgSubmit', {'content':data['content'],'root':data['root'],'p_id':data['root'],'type':data['type']}, function (data) {
			data = $.parseJSON(data);
			if (data.code!=1) {
				alert(data.message);
			} else {
				// window.location.reload();
			}
		})
	})
})