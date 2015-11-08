<?php
    /**
     * 执行对应操作
     *查询，点赞
     */
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
        $receive = $_POST; 
        if (function_exists($action)) {
            require_once('../public/mysql_pdo.php');
            $action($receive);
        } else {
            echo "方法不存在";
        }
    }

    function select($receive)
    {
        global $pdo;
        $str = "SELECT * FROM article WHERE STATUS=1 and id=".$_GET['id'].";";
        $r=$pdo-> query ( $str );
        if ($r) {
           foreach ($r as $key => $value) {
                $ajax['code']=1;
                $ajax['title']=$value['title'];
                $time = date("Y-n-j G:i:s",$value['date']);
                $ajax['date']=$time;
                $ajax['content']=$value['content'];
            }
        }
        else {
            $ajax['code'] = 0;
            $ajax['message'] = '请稍后再试';
        }
        echo json_encode($ajax);
    }