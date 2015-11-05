<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Vertical Responsive Timeline UI - Template Monster Demo</title>
  <!--共有引用部分-->
  <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../../public/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
  <!--自我独有引用部分-->
  <script type="text/javascript" src="test.js"></script>
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="test.css">
</head>
<body>
<div class="input-append date form_datetime" data-date="2012-12-21T15:25:00Z">
    <input size="16" type="text" value="" readonly>
    <span class="add-on"><i class="icon-remove"></i></span>
    <span class="add-on"><i class="icon-th"></i></span>
</div>
 
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true
    });
</script>       
</body>