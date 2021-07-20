<?php
	session_start();
	include("conn.php");
	$x=$_GET['x'];
	if($x=="student"){
		//$sql="INSERT INTO `student`(`student_id`, `password`, `student_name`, `student_year`, `student_class`, `mom_year`, `father_year`, `birthday`, `sex`) VALUES ('$_GET[user]','$_GET[password]','','','','','','','')";
		$sql="INSERT INTO `student`(`user_id`, `password`,`	adaptation_scale`) VALUES ('$_GET[user]','$_GET[password]','$_GET[child]')";
		$ins=mysqli_query($conn,$sql);
		if($ins){
			header("Location:main.php");
			$_SESSION['url']="s";
		}
	}else if($x=="parent"){
		//確認有無學生帳號
		/*$selstu=mysqli_query($conn,"select * from `student` where `student_id`='$_GET[child]'");
		if(mysqli_num_rows($selstu)>0){
			//新增進資料庫
			$sql="INSERT INTO `parent`(`parent_id`, `password`) VALUES ('$_GET[user]','$_GET[password]')";
			$ins=mysqli_query($conn,$sql);
			if($ins){
				header("Location:main.php");
				$_SESSION['url']="p";
			}
		}else{
			echo "<script>alert('查無學生帳號!!');history.go(-1)</script>";
		}*/
		//新增進資料庫
		$sql="INSERT INTO `parent`(`parent_id`, `password`) VALUES ('$_GET[user]','$_GET[password]')";
		$ins=mysqli_query($conn,$sql);
		if($ins){
			header("Location:main.php");
			$_SESSION['url']="p";
		}
	}

	
?>