<?php
	session_start();
	include("conn.php");
	$sql="delete from `adaptation_scale_w` where `w_scale_id`='$_GET[id]'";
	$del=mysqli_query($conn,$sql);
	if($del){
		header("Location:main.php");
		$_SESSION['url']="adaptation_scale_sw";
	}else{
		echo "<script>刪除失敗!!</script>";
	}
?>