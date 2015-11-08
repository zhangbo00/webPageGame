<!DOCTYPE HTML>
<html>
<head>
    <title>文章</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">

<body>
<div>
    <table class="table table-striped table-bordered">
        <thead>
            <td>标题</td>
            <td>管理员</td>
            <td>时间</td>
            <td>状态</td>
        </thead>
        <tbody>
        <?php
            require ('../public/mysql_pdo.php');
            $str = "SELECT * FROM article WHERE STATUS=1;";
            $r=$pdo-> query ( $str );
            foreach ($r as $key => $value) {
                $time = date("Y-n-j G:i:s",$value['date']);
                echo '<tr id='.$value['id'].'>';
                echo "<td>".$value['title']."</td>";
                echo "<td>".$value['admin_id']."</td>";
                echo "<td>".$time."</td>";
                echo "<td>".$value['status']."</td>";
                echo '<td><span class="glyphicon glyphicon-remove btn-lg"></span><span class="glyphicon glyphicon-pencil btn-lg"></span></td>';
                echo "</tr>";
            }
         ?>     
        </tbody>
    </table>
</div>

</body>
<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/article.js"></script>
</html>