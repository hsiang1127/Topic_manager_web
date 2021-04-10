<?php  
	session_start();
	include('conn.php');
?>
<html>
	<head>
		<title>使用者管理</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				function show_management(t){
					$.ajax({
						type:'GET',
						url: t,
						data:{},
						success: function(result){
							$("#show_management").html(result);
						},
					});
				}
		</script>
	</head>
	<style>
	</style>
	<body>
		<?php
			if(isset($_SESSION["url"])&& $_SESSION["url"]!=""){
				if($_SESSION["url"]=="s"){
					echo "<script>show_management('student_management.php');</script>";
					$_SESSION["url"]="";
				}else{
					echo "<script>show_management('parent_management.php');</script>";
					$_SESSION["url"]="";
				}
			}
		?>
		</p>
		<center>
			<!--<button class='button' id='teacher' name='teacher' onclick="show_management('teacher_management.php')"><b>老師</b></button>-->
			<button class='button' id='teacher' name='teacher' onclick="show_management('student_management.php')"><b>學生</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_management('parent_management.php')"><b>家長</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_management('user_ins.php')"><b>新增使用者</b></button>
		</center>
		</p>
		<div id='show_management'></div>
	</body>
</html>