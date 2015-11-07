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
</head>
<body data-spy="scroll" data-target="#navbar-example">
  
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
        <div class="jumbotron logoba logobox">
          <img src="images/logo_v.jpg" alt="">
        </div>
        <div class="pro_text">
          <h2>为了梦想而努力奋斗</h2>
          <p>
            小米公司正式成立于2010年4月，是一家专注于高端智能手机、互联网电视以及智能家居生态链建设的创新型科技企业。
          </p>
          <p> 
            “让每个人都可享受科技的乐趣”是小米公司的愿景。小米公司应用了互联网开发模式开发产品的模式，用极客精神做产品，用互联网模式干掉中间环节，致力于让全球每个人，都能享用来自中国的优质科技产品。
          </p>
          <p>
            小米公司自创办以来，保持了令世界惊讶的增长速度，小米公司在2012年全年售出手机719万台，2013年售出手机1870万台，2014年售出手机6112万台。
          </p>
          <p>
            小米公司在互联网电视机顶盒、互联网智能电视，以及家用智能路由器和智能家居产品等领域也颠覆了传统市场。截至2014年年底，小米公司旗下生态链企业已达22家，其中紫米科技的小米移动电源、华米科技的小米手环、智米科技的小米空气净化器、加一联创的小米活塞耳机等产品均在短时间内迅速成为影响整个中国消费电子市场的明星产品。 
          </p>
          <p>
            小米生态链建设将秉承开放、不排他、非独家的合作策略，和业界合作伙伴一起推动智能生态链建设。
          </p>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="title_1">
        <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. gfLo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      </div>

      <div role="tabpanel" class="tab-pane" id="title_2">
        <div class="page">
        <div class="header">
        <div class="box">
        <ul class='event_year'>
        <?php 
          require ('../public/mysql_pdo.php');  //连接数据库
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