
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章</title>
    <?php
        $dbc = mysqli_connect('localhost','root','','geekstudio') or die("Error connecting to MySQL server.");
        mysqli_set_charset($dbc,'utf8');
        $id=$_GET['id'];
        $query = "SELECT * FROM article WHERE id='$id'";    
        $result = mysqli_query($dbc,$query);
        $row = mysqli_fetch_array($result);
    ?>
</head>
<body>
    <h1 style="text-indent:2em;font-size:40px;">
        <?php
            echo "$row[title]";
        ?>
        
    </h1>
    <div style="text-indent:2em;font-size:19px;">
        <?php
            echo "$row[content]";
        ?>
    </div>
</body>

</html>