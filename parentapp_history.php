<?php  
	session_start();
	include('conn.php');
?>
<html>
	<head>
		<title>家長app紀錄</title>
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
							$("#show_apphistory").html(result);
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
				if($_SESSION["url"]=="mood_disorders_scale"){
					echo "<script>show_apphistory('mood_disorders_scale_w.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION['url']=="adaptation_scale_pw"){
					echo "<script>show_apphistory('adaptation_scale_pw.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION['url']=="interactive_scale_w"){
					echo "<script>show_apphistory('interactive_scale_w.php');</script>";
					$_SESSION["url"]="";
				}
			}
		?>
		</p>
		<center>
			<button class='button' id='teacher' name='teacher' onclick="show_apphistory('mood_disorders_scale_w.php')"><b>孩子的行為填寫紀錄</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_apphistory('adaptation_scale_pw.php')"><b>孩子最近的表現填寫紀錄</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_apphistory('interactive_scale_w.php')"><b>與孩子的互動填寫紀錄</b></button>
		</center>
		</p>
		<div id='show_apphistory'></div>
	</body>
</html>