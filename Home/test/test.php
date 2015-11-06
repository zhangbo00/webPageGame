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
<?php 
 
　　include "PHPMailer/class.phpmailer.php";
　　function send_mail($frommail,$tomail,$subject,$body,$ccmail,$bccmail){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug;
    $mail->Host = "smtp.qq.com";
    $mail->SMTPAuth = true;
    $mail->Port = 25;
    $mail->Username = "admin@51yip.com";
    $mail->Password = "******";
    $mail->AddReplyTo($frommail, 'tankzhang');
    $mail->AddAddress($tomail);
    $mail->SetFrom($frommail, 'tankzhang');
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
　　if(!$mail->Send())
　　{
　　echo "邮件发送失败.
　　";
　　echo "错误原因: " . $mail->ErrorInfo;
　　exit;
　　}else{
    echo "success";
?>
</body>