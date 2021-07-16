<?php  
	session_start();
	include('conn.php');
?>
<html>
	<head>
		<title>學生app紀錄</title>
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
				if($_SESSION["url"]=="adaptation_scale_sw"){
					echo "<script>show_apphistory('adaptation_scale_sw.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION["url"]=="mood_thermometer" ){
					echo "<script>show_apphistory('mood_thermometer_w.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION["url"]=="diary" ){
					echo "<script>show_apphistory('mood_diary_w.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION["url"]=="play" ){
					echo "<script>show_apphistory('play_history.php');</script>";
					$_SESSION["url"]="";
				}else if($_SESSION["url"]=="video" ){
					echo "<script>show_apphistory('video.php');</script>";
					$_SESSION["url"]="";
				}
			}
		?>
		</p>
		<center>
			<button class='button' id='btu1' name='btu1' onclick="show_apphistory('adaptation_scale_sw.php')"><b>社會適應量表填寫紀錄</b></button>
			<button class='button' id='btu2' name='btu2' onclick="show_apphistory('mood_thermometer_w.php')"><b>情緒溫度計填寫紀錄</b></button>
			<button class='button' id='btu3' name='btu3' onclick="show_apphistory('mood_diary_w.php')"><b>心情日記寫紀錄</b></button>
			<button class='button' id='btu4' name='btu4' onclick="show_apphistory('play_history.php')"><b>遊戲遊玩紀錄</b></button>
			<button class='button' id='btu5' name='btu5' onclick="show_apphistory('video.php')"><b>影片新增紀錄</b></button>
		</center>
		</p>
		<div id='show_apphistory'></div>
	</body>
</html>