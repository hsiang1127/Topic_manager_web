<?php
	session_start();
	include("conn.php");
	$sql="update `adaptation_scale_w` set `q1`='$_GET[q1]',`q2`='$_GET[q2]',`q3`='$_GET[q3]',`q4`='$_GET[q4]',`q5`='$_GET[q5]',`q6`='$_GET[q6]',`q7`='$_GET[q7]',`q8`='$_GET[q8]',`q9`='$_GET[q9]',`q10`='$_GET[q10]' where `w_scale_id`='$_GET[id]'";
	$upd=mysqli_query($conn,$sql);
	if($upd){
		header("Location:main.php");
	}else{
		echo "<script>修改失敗!!</script>";
	}
?>