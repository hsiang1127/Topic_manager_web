<?php
	session_start();
	include("conn.php");
	$sql="delete from `student` where `user_id`='$_GET[user]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
		$_SESSION['url']="s";
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>