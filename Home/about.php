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
<!--
  <div id="navbar-example">
    <ul class="nav nav-tabs" role="tablist">
      	<li role="presentation" class="active"><a href="#1">Home</a></li>
      	<li role="presentation"><a href="#2">Profile</a></li>
      	<li role="presentation"><a href="#3">Messages</a></li>
    </ul>
    <div>
  -->
  <div class="bs-example" data-example-id="embedded-scrollspy" id="navbar-example">
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
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
      <h4 id="profile" class="bg-primary">公司简介</h4>
      <div class="jumbotron">
        <h1>Geek信条</h1>
        <p>需要的是原创和新奇，盲目的跟从和愚昧是不可原谅的。</p>
        
        <h2>入门</h2>
		<p>
        小时候就喜欢把东西拆了，希望知道其工作原理；<br>
        对于电子设备一直有兴趣；<br>
        对电视遥控器感到非常好奇；<br>
        能够对家里的VCR编程(定时录像等)；<br>
        喜欢自学使用各种东西；<br>
        对于学校提供的电脑上机时间总是感觉不够；<br>
        </p>
        <h2>中级</h2>
        <p>
        喜欢告诉别人你昨晚如何用了3个小时搜索WEB；<br>
        有一些朋友会一直问你有关电子的任何问题，而且相信你给出的任何答案；<br>
        已经写出了你自己的电脑程序；<br>
        使用Notepad或者VI写一些回信；<br>
        知道如何使用文本编辑器编写HTML；<br>
        从来不关电脑；<br>
        </p>
        <h2>高级</h2>
		<p>
        喜欢告诉别人你是如何成功的启动了计算机，或者，重新给遥控器编程；<br>
        不相信任何电子设备的使用手册；<br>
        相信任何东西都能被修好；<br>
        购买昂贵的电子玩具，以期能够把它和其他设备结合起来，但是往往适得其反；<br>
        知道从注册域名到Internet如何工作的所有知识；<br>
        你的电脑的显示器比你的电视机的屏幕还大(如果你有电视机的话)；<br>
        有超过一台的电脑，而且都一直开着；<br>
        家里有局域网；<br>
        </p>
        <h2>超级</h2>
		<p>
        穿着内衣坐在电脑前，直到凌晨，一如既往；<br>
        情愿坐在电脑前吃方便面，也不愿出去约会；<br>
        能够修好任何东西；<br>
        打字比你思考还快；<br>
        比和人们在一起花更多的时间上网；<br>
        不能理解为什么有些人不能从头到尾装起一台完整的电脑来；<br>
        不相信有图形的WEB浏览——lynx始终是最好的选择，也是唯一的需要；<br>
        使用文本编辑器——而不是文字处理软件——来回所有的信件；<br>
        从不，决不，绝对不穿西装；<br>
        相信只有Sucker才付费——免费网络连接，自由软件，用IP打电话。
        </p>
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