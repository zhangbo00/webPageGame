<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章阅览</title>
</head>
<body>
    <div class="text">
        <?php 
            require ('../public/mysql_pdo.php');  //连接数据库
            $str = "SELECT * FROM article where status=1 and id=".$_GET['id'].";";
            $r=$pdo-> query ( $str );
            foreach ($r as $key => $value) {
                echo "<h1>$value[title]</h1>";
                $time=date("Y-n-d",$value['date']);
                echo "<h2>$time</h2>";
                echo "<div class='content'>";
                echo "<h1>$value[content]</h1>";
                echo "</div>";  
            }
         ?>
    </div>
</body>
</html>