<?php
	session_start();
	include("conn.php");
	$sql="delete from `mood_thermometer` where `tmmt_id`='$_GET[id]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
		$_SESSION['url']="mood_thermometer";
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>