<?php
 $dsn='mysql:dbname=geekstudio;host=localhost';
 $user='root';
 $password='';
 try{
  $dbh=new PDO($dsn,$user,$password);
 }catch(PDOException $e){
  echo '失败'.$e->getMessage();
 }
 //echo "服务器".$dbh->getAttribute(PDO::ATTR_SERVER_INFO);
?>