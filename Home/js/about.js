$(function(){
	$(".img_box_left:odd").removeClass('img_box_left').addClass("img_box_right");
	$(".members_text_left:even").removeClass('members_text_left').addClass("members_text_right");
	//发展历程时间轴事件
	$('label').click(function(){
	    $('.event_year>li').removeClass('current');
	    $(this).parent('li').addClass('current');
	    var year = $(this).attr('for');
	    $('#'+year).parent().prevAll('div').slideUp(800);
	    $('#'+year).parent().slideDown(800).nextAll('div').slideDown(800);
	});
})
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
$('#myTabs a[href="#profile"]').tab('show'); // Select tab by name
$('#myTabs a:first').tab('show'); // Select first tab
$('#myTabs a:last').tab('show') ;// Select last tab
$('#myTabs li:eq(2) a').tab('show'); // Select third tab (0-indexed)

