<!DOCTYPE HTML>
<html>
<head>
    <title>文章</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <script type="text/javascript" charset="utf-8" src="Article/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="Article/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="Article/lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        .clear {
            clear: both;    /*清除浮动*/
        }
    </style>
</head>
<body>
<div>
    <?php
        require ('../public/mysql_pdo.php');
        if(!empty($_GET['title']) and !empty($_GET['editorValue'])){
            // echo $_GET['title']."  :标题******<br>";
            // echo $_GET['editorValue']."  :editorValue******<br>";
            $time=time();
            $str="INSERT INTO article(title,admin_id,DATE,content) VALUES('".$_GET['title']."',3,".$time.",'".$_GET['editorValue']."');";
            $r=$pdo-> query ( $str );
            if($r)  echo "添加".$_GET['title']."成功<br>";
            else    echo "添加".$_GET['title']."失败<br>";
        }
     ?>
    <h1>添加文章</h1>
    <form action="">
        <label for="">标题</label><br>
        <input name="title" type="text"><br>
        <label for="">内容</label><br>
        <script id="editor" type="text/plain" style="width:1024px;height:300px;"></script>
        <button onclick="clearLocalData()">重置</button>
        <button type="submit" onclick="submit()">提交</button>
    </form>
</div>

</body>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('editor');
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        //alert("已清空草稿箱")
    }
</script>
</html>