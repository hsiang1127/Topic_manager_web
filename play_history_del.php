<?php
	session_start();
	include("conn.php");
	$sql="delete from `play_history` where `play_id`='$_GET[id]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>