<?php
	session_start();
	include("conn.php");
	$sql="delete from `parent` where `parent_id`='$_GET[user]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
		$_SESSION['url']="p";
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>