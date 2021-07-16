<?php
	session_start();
	include("conn.php");
	$sql="update `student` set `password`='$_GET[password]',`student_id`='$_GET[stuid]',`student_name`='$_GET[name]', `birthday`='$_GET[birthday]', `sex`='$_GET[sex]' where `user_id`='$_GET[user]'";
	$upd=mysqli_query($conn,$sql);
	if($upd){
		header("Location:main.php");
		$_SESSION['url']="s";
	}else{
		echo "<script>修改失敗!!</script>";
	}
?>