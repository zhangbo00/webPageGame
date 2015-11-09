<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <!--共有引用部分-->
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
    <!--自我独有引用部分-->
    <link rel="stylesheet" href="css/about_history.css">
    <link rel="stylesheet" href="css/about.css">
    <script type="text/javascript" src="js/about.js"></script>
    <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <?php
      echo "<link href='public/public.css' type='text/css' rel='stylesheet' />"
    ?>
</head>
<body data-spy="scroll" data-target="#navbar-example">
  
  <?php
  require_once('public/header.html');
?>
  <div>
    <!-- Nav tabs -->
    <div id="about_title">
      <ul id="founder" class="nav nav-tabs" >
        <?php   //读标题并进行添加
          $about_title=array('公司简介','企业文化','发展历程','成员介绍');
          foreach ($about_title as $key => $value) {
            if($key==0){
              echo "<li role='presentation' class='active'><a id='myTabs' href='#title_$key' aria-controls='home' role='tab' data-toggle='tab'>$value</a></li>";
            }else{
              echo "<li role='presentation'><a href='#title_$key' aria-controls='messages' role='tab' data-toggle='tab'>$value</a></li>";
            }
          }
         ?>
      </ul>
    </div>
    <!-- Tab panes -->
    <div id="about_content" class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="title_0">
<!--         <div class="jumbotron logoba logobox">
  <img src="images/logo_v.jpg" alt="">
</div> -->
        <div class="pro_text">
          <?php 
            require ('../public/mysql_pdo.php');  //连接数据库
            $str = "SELECT * FROM article where id=1;";
            $r=$pdo-> query ( $str );
            foreach ($r as $key => $value) {
              echo "<h2>$value[title]</h2>";
              echo $value['content'];
            }
          ?>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="title_1">
          <?php 
            $str = "SELECT * FROM article where id=31;";
            $r=$pdo-> query ( $str );
            foreach ($r as $key => $value) {
              echo "<h2>$value[title]</h2>";
              echo $value['content'];
            }
           ?>
      </div>

      <div role="tabpanel" class="tab-pane" id="title_2">
        <div class="page">
        <div class="header">
        <div class="box">
        <ul class='event_year'>
        <?php 
          $str = "SELECT * FROM course where status=1 order by date;";
          $r=$pdo-> query ( $str );
          echo "</ul><ul class='event_list'>";
          $old = 0;
          //获取内容
          foreach ( $r as  $key => $value ) {
            $year = (int)date('Y',$value['date']);
            $time = date('n月j日',$value['date']);

            if($year > $old){
              if($old != 0){
                echo "</div>";
              }
              echo "<div><h3 id=".$year.">".$year."</h3>";
              echo '<script type="text/javascript">
                  $(".event_year").append("<li class=\'current\'><label for=\''.$year.'\'>'.$year.'</label></li>");
              </script>';
              $old = $year;
            }

            echo "<li><span>".$time."</span><p><span>".$value['content']."</span></p></li>"; 
          }

          if($old){
            echo "</div>";                       
          }
          ?>
          </ul>
          <div class="clearfix"></div>
        </div>
        </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="title_3">
        <ul class="about_members">
          <?php
            $str = "select * from members where status=1;";     //查询成员
            $q=$pdo-> query ($str);
            foreach ($q as  $row ) {
              echo "<li>";
              echo "<div class='img_box img_box_left'><img src=".$row['img']." alt='图片'></div>";
              echo "<div class='members_text members_text_left'>";
              echo "<h2>".$row['name']."</h2><h3>".$row['work']."</h3><p>".$row['summary']."</p>";
              echo "</div></li>";
            }
           ?>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>