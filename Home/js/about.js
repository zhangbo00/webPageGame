//alert("about");
$('body').scrollspy({ target: '#navbar-example' });
$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
});
$('#myScrollspy').on('activate.bs.scrollspy', function () {
  alert(123);
})