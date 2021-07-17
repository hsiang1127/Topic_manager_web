<?php
	session_start();
	include("conn.php");
	$sql="delete from `interactive_scale_w` where `w_scale_id`='$_GET[id]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
		$_SESSION['url']="interactive_scale_w";
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>