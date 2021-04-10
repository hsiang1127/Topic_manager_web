<?php
	session_start();
	include("conn.php");
	$sql="update `student` set `password`='$_GET[password]',`student_name`='$_GET[name]', `student_year`='$_GET[s_year]', `student_class`='$_GET[s_class]', `mom_year`='$_GET[m_year]', `father_year`='$_GET[f_year]', `birthday`='$_GET[birthday]', `sex`='$_GET[sex]' where `student_id`='$_GET[user]'";
	$upd=mysqli_query($conn,$sql);
	if($upd){
		header("Location:main.php");
		$_SESSION['url']="s";
	}else{
		echo "<script>修改失敗!!</script>";
	}
?>