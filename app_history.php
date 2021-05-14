<?php  
	session_start();
	include('conn.php');
?>
<html>
	<head>
		<title>app紀錄</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				function show_apphistory(t){
					$.ajax({
						type:'GET',
						url: t,
						data:{},
						success: function(result){
							$("#show").html(result);
						},
					});
				}
		</script>
	</head>
	<style>
	</style>
	<body>
		<?php
			/*if(isset($_SESSION["url"])&& $_SESSION["url"]!=""){
				if($_SESSION["url"]=="s"){
					echo "<script>show_apphistory('student_management.php');</script>";
					$_SESSION["url"]="";
				}else{
					echo "<script>show_apphistory('parent_management.php');</script>";
					$_SESSION["url"]="";
				}
			}*/
		?>
		</p>
		<center>
			<button class='button' id='teacher' name='teacher' onclick="show('studentapp_history.php')"><b>學生端</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show('parentapp_history.php')"><b>家長端</b></button>
		</center>
		</p>
	</body>
</html>