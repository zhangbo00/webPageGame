<?php 
	DEFINE('DB_USER','root');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_NAME','geekstudio');
	try {
     $pdo = new  PDO ( 'mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER , DB_PASSWORD);
	} catch ( PDOException $e ) {
    print  "Error!: "  .  $e -> getMessage () .  "<br/>" ;
    die();
	}

	//设置编码方式
	$pdo->query("SET NAMES utf8");
<<<<<<< HEAD
/*
	$str = "select * from message;";
	    foreach ( $pdo-> query ( $str ) as  $row ) {
	    	var_dump($row);

=======

/*	$str = "select * from about;";
	    foreach ( $pdo-> query ( $str ) as  $row ) {
        print  $row [ 'id' ] .  " : " ;
        echo $row['title']."<br>";
>>>>>>> cffe88ea26a1529a4a4e043a7f404f29ecbf7be4
    }*/

 ?>