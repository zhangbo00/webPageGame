<?php
    /**
     * 执行对应操作
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

    function article_del($receive)
    {
        global $pdo;
        $update_query = "update article set status=0 where id = $receive[id]";
        $update_rs = $pdo->exec($update_query);
        if ($update_rs) {
            $ajax['code'] = 1;
        }
        else {
            $ajax['code'] = 0;
            $ajax['message'] = '删除错误';
        }
        echo json_encode($ajax);
    }

    function article_submit($receive)
    {
        global $pdo;
        // 暂无session
        $receive['u_id'] = 1; 
        if (strlen($receive['content'])==0) {
            $ajax['code'] = 0;
            $ajax['message'] = '不能为空';
        }
        else {
            $time = time();
            $stmt = $pdo->prepare("insert into article (title,admin_id,date,content) values (?,?,?,?)");
            $stmt->bindParam(1, $receive['title']);
            $stmt->bindParam(2,$receive['admin_id']);
            $stmt->bindParam(3,$time);
            $stmt->bindParam(4, $receive['content']);
            $result = $stmt->execute();

            $ajax['code'] = 1;
        }
        echo json_encode($ajax);
    }
?>