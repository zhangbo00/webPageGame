function getData (that) {
	var data = []; 
	data['content'] = that.prev('textarea').val();
	data['root'] = that.parents('.message_item').attr('message-id');
	data['p_id'] = that.attr('message-id');
	return data;
}

function checkData (data) {
	var error = '';
	if ($.trim(data['content'])=='') {
		error = '留言不能为空';
	}
	return error;
}

function sendData (msg_data) {
	$.post('handle.php?action=msgSubmit', {'content':msg_data['content'],'root':msg_data['root'],'p_id':msg_data['p_id']}, function (data) {
		data = $.parseJSON(data);
		console.log(data.code);
		if (data.code!=1) {
			alert(data.message);
		} else {
			// window.location.reload();
		}
	})
}
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
			$(".msg_submit").click();	
		}
	})

	$(".message>button").click(function() {

		var msg_data = [];
		msg_data['content'] = $(this).prev('textarea');
		msg_data['root'] = 0;
		msg_data['p_id'] = 0;
		var error = checkData(msg_data)
		if (error.length=!0){
			alert(error);
			return;
		}
		sendData(msg_data);
	});

	$(".message_item .reply").click(function() {
		($(this).next('.reply_content')).slideToggle();
	});

	$(".reply_content .submit").click(function () {
		var msg_data = getData(that);
		var error = checkData(msg_data)
		if (error.length=!0){
			alert(error);
			return;
		}
		sendData(msg_data);
	})
})