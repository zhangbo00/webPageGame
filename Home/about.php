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
    <div id="about_header">
      <nav id="navbar-example2" class="navbar navbar-default navbar-static">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Geek Studio</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy ">
          <ul class="nav navbar-nav">
            <li><a href="#profile">公司简介</a></li>
            <li><a href="#culture">文化</a></li>
            <li><a href="#history">历程</a></li>
            <li class="dropdown">
              <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Founder <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDrop1">
                <li><a href="#one">Mr. Liu</a></li>
                <li><a href="#two">Mr. Wang</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#three">Mr. Zhang</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="bs-example" data-example-id="embedded-scrollspy" id="navbar-example">
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
      <div id="pro">
        <h4 id="profile" class="bg-primary">公司简介</h4>
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
      <h4 id="culture" class="bg-primary">文化</h4>
      <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. gfLo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      <h4 id="history" class="bg-primary">历程</h4>
      <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. gfLo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      <h4 id="one" class="bg-danger">Mr. Liu</h4>
      <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
      <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
      <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
      <h4 id="two" class="bg-danger">Mr. Wang</h4>
      <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
        <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
        <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
        <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
      <h4 id="three" class="bg-danger">Mr. Zhang</h4>
      <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
      </p>
    </div>
  </div><!-- /example -->

</body>
</html>