<?php
	session_start();
	include("conn.php");
	//確認有無學生帳號
	$selstu=mysqli_query($conn,"select * from `student` where `user_id`='$_GET[student]'");
	if(mysqli_num_rows($selstu)>0){
		//新增進資料庫
		$sql="INSERT INTO `relationship`(`parent_id`, `student_id`) VALUES ('$_GET[parent]','$_GET[student]')";
		$ins=mysqli_query($conn,$sql);
		if($ins){
			header("Location:main.php");
			$_SESSION['url']="s";
		}
	}else{
		echo "<script>alert('查無學生帳號!!');history.go(-1)</script>";
	}
?>