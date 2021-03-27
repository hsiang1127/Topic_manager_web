<?php
	$conn = mysqli_connect("localhost","root","");
	if(!$conn){
		die("連線失敗");
	}
	mysqli_query($conn,"SET NAMES 'UTF8'");
	$db=mysqli_select_db($conn,"treatment");
	if(!$db){
		die("資料庫連線失敗");
	}
	/*header("Content-Type:text/html; charset=utf-8");
	$db_name = "test20200901"; //mysql 資料庫名稱
	$mysql_username = "root"; //mysql 資料庫使用者名稱
	$mysql_password = "loading109203"; //mysql 資料庫使用者密碼
	$server_name = "localhost"; //mysql 登入方式
	$conn = mysqli_connect($server_name ,$mysql_username,$mysql_password,$db_name );*/
?>