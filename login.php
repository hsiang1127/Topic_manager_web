<?php  
	include "conn.php";
	$ret=mysqli_query($conn,"select * from `manager` where `teacher_id`='$_POST[user]'");
	if(mysqli_num_rows($ret)>0){ //上面($ret)那行的sql執行後返回的值,1代表查到了(因為帳密是同時正確才能登入,所以sql語法用and),0代表沒查到
		$check=mysqli_query($conn,"select * from `teacher` where `teacher_id`='$_POST[user]' and `password`='$_POST[password]'");
		if(mysqli_num_rows($check)>0){
			header("location:main.php");//跳頁到 main.php 
		}else{
			echo "<script>alert('帳號密碼錯誤!!');history.go(-1)</script>";
		}
	}else{
		echo "<script>alert('查無使用者!!');history.go(-1)</script>";
	}
?>