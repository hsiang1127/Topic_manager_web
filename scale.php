<?php  
	session_start();
	include('conn.php');
?>
<html>
	<head>
		<title>量表管理</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				function show_scalemanagement(t){
					$.ajax({
						type:'GET',
						url: t,
						data:{},
						success: function(result){
							$("#show_scalemanagement").html(result);
						},
					});
				}
		</script>
	</head>
	<style>
	</style>
	<body>
		</p>
		<center>
			<button class='button' id='teacher' name='teacher' onclick="show_scalemanagement('')"><b>量表頻率</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_scalemanagement('')"><b>社會適應量表</b></button>
			<button class='button' id='teacher' name='teacher' onclick="show_scalemanagement('')"><b>情緒障礙量表</b></button>
		</center>
		</p>
		<div id='show_scalemanagement'></div>
	</body>
</html>