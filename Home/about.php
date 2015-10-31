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
    <link rel="stylesheet" href="css/about.css">
    <script type="text/javascript" src="js/about.js"></script>
    <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
</head>
<body data-spy="scroll" data-target="#navbar-example">
	<?php 
		require ('../public/mysql_pdo.php');	//连接数据库
/*		$str = "select * from about;";
	    foreach ( $pdo-> query ( $str ) as  $row ) {
        print  $row [ 'id' ] .  " : " ;
        echo $row['title']."<br>";
    }
*/
	?>
  <div>
    <!-- Nav tabs -->
    <div id="about_title">
      <ul id="founder" class="nav nav-tabs" >
        <li role="presentation" class="active"><a id="myTabs" href="#title_1" aria-controls="home" role="tab" data-toggle="tab">公司简介</a></li>
        <li role="presentation"><a href="#title_2" aria-controls="messages" role="tab" data-toggle="tab">企业文化</a></li>
        <li role="presentation"><a href="#title_3" aria-controls="settings" role="tab" data-toggle="tab">发展历程</a></li>
        <li role="presentation"><a href="#title_4" aria-controls="settings" role="tab" data-toggle="tab">成员介绍</a></li>
      </ul>
    </div>
    <!-- Tab panes -->
    <div id="about_content" class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="title_1">
        <h4 id="one" class="bg-danger">公司简介</h4>
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
      <div role="tabpanel" class="tab-pane" id="title_2">
        <h4 id="two" class="bg-danger">企业文化</h4>
        <h4 id="culture" class="bg-primary">文化</h4>
        <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. gfLo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      </div>
      <div role="tabpanel" class="tab-pane" id="title_3">
        <h4 id="three" class="bg-danger">发展历程</h4>
        <h4 id="history" class="bg-primary">历程</h4>
        <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. gfLo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      </div>
      <div role="tabpanel" class="tab-pane" id="title_4">
        <h4 id="three" class="bg-danger">成员介绍</h4>
        <ul class="about_members">
          <li>
            <div><img src="images/sy_50382172896.jpg" alt=""></div>
            <div>
              <h2>姓名</h2>
              <h3>工作</h3>
              <p>个人简介</p>
            </div>
          </li>
          <li>
            <div><img src="images/sy_50382172896.jpg" alt=""></div>
            <div>
              <h2>姓名</h2>
              <h3>工作</h3>
              <p>个人简介</p>
            </div>
          </li>
          <li>
            <div><img src="images/sy_50382172896.jpg" alt=""></div>
            <div>
              <h2>姓名</h2>
              <h3>工作</h3>
              <p>个人简介</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>