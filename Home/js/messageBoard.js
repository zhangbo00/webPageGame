/**
 * 取得表单数据
 * @param  {click_obj} that 
 * @return {array}     内容，根节点，父节点 
 */
function getData (that) {
	var data = []; 
	data['content'] = that.prev('textarea').val();
	data['root'] = that.parents('.message_item').attr('message-id');
	data['p_id'] = that.attr('message-id');
	data['type'] = 1;
	return data;
}
/**
 * 检验数据
 * @param  {array} data 留言内容
 * @return {array}      检验状态，[错误信息]
 */
function checkData (data) {
	var check = [];
	if ($.trim(data['content'])=='') {
		check['code'] = 0;
		check['message'] = '留言不能为空';
	}
	return check;
}
/**
 * 	ajax发送留言数据
 * @param  {array} msg_data 留言内容，根节点，父节点
 * @return null
 * 失败弹出错误信息，成功页面刷新
 */
function sendData (msg_data) {
	$.post('handle.php?action=msgSubmit', {'content':msg_data['content'],'root':msg_data['root'],'p_id':msg_data['p_id'],'type':msg_data['type']}, function (data) {
		data = $.parseJSON(data);
		if (data.code!=1) {
			alert(data.message);
		} else {
			window.location.reload();
		}
	})
}
/**
 * 格式化时间戳
 * @param  {int} ns        时间戳
 * @param  {string} separator 分隔符
 * @return {string}           格式化后的时间字符串
 */
function getTime (ns,separator) {
	var time = new Date(parseInt(ns) * 1000);
	var year = time.getYear()+'';
	var month = time.getMonth();
	var day = time.getDay();
	var hours = time.getHours();
	if (hours<10) hours='0'+hours;
	var minutes = time.getMinutes();
	return (year.substr(-2))+separator+month+separator+day+' '+hours+':'+minutes;
}

$(function () {

	//文本域长度监听
	$('textarea').on('input',function () {
		var content = $(this).val(); 
		if (content.length>150) {
			$(this).val(content.substring(0,150)); 
			alert("请不要超过150字");
		};
	})
	//快捷键发送留言
	$(".message>textarea").on('keydown', function (event) {
		if(event.ctrlKey && event.keyCode == 13) {
			$(".msg_submit").click();	
		}
	})
	//提交留言
	$(".message>button").click(function() {
		var msg_data = [];
		msg_data['content'] = $(this).prev('textarea').val();
		msg_data['root'] = 0;
		msg_data['p_id'] = 0;
		msg_data['type'] = 0;
		var check = checkData(msg_data)
		if (check['code'] == 0){
			alert(check['message']);
			return;
		}
		sendData(msg_data);
	});
	//点击回复展开显示文本域
	$(".message_item .reply").click(function() {
		($(this).next('.reply_content')).slideToggle();
	});
	//点击回复留言
	$(".reply_content .submit").click(function () {
		var msg_data = getData($(this));
		var check = checkData(msg_data)
		if (check['code'] == 0){
			alert(check['message']);
			return;
		}
		sendData(msg_data);
	})
	//加载更多回复
	$(".load_more").click(function () {
		if ($(this).attr('disabled')=='disabled') return;
		var message_item = $(this).parents('.message_item');
		var root = message_item.attr('message-id');
		var answer_num = message_item.find('.list-group-item').length-1;
		var load = $(this);
		$.post('handle.php?action=answer_load_more',
			{'root':root,'answer_num':answer_num,'limit':11},
			function (data) {
				data = JSON.parse(data);
				// data = eval(data);
				var i;
				for (i = 0; i < data.length-1; i++) {
					var html="";
					html+='<li class="list-group-item">';
					html+=data[i].nick+'<xmp>'+data[i].content+'</xmp>:'+data[i].root+'time:'+getTime(data[i].time,'-');
					html+='<button type="button" class="reply btn btn-default">回复</button>';
					html+='<div class="reply_content">';
						html+='<textarea></textarea>';
						html+='<button type="button" class="submit btn btn-default" message-id='+data[i].id+'>提交</button>';
					html+='</div>';
					html+='</li>';
					load.before(html);
				};
				if (data.length<11) {
					load.text('暂无更多');
					load.attr('disabled', true);
				};
			}
		)
	})
})