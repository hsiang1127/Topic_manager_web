<?php
	include("conn.php");
	$x=$_GET['x'];
	if($x=="student"){
		$sql="INSERT INTO `student`(`student_id`, `password`, `student_name`, `student_year`, `student_class`, `mom_year`, `father_year`, `birthday`, `sex`) VALUES ('$_GET[user]','$_GET[password]','','','','','','','')";
		$ins=mysqli_query($conn,$sql);
		if($ins){
			header("Location:main.php");
		}
	}else if($x=="parent"){
		$sql="INSERT INTO `parent`(`parent_id`, `password`, `child`, `parent_name`) VALUES ('$_GET[user]','$_GET[password]','$_GET[child]','')";
		$ins=mysqli_query($conn,$sql);
		if($ins){
			header("Location:main.php");
		}
	}

	
?>