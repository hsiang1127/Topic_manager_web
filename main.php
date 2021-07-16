<?php  
	session_start();
?>

<html>
	
    <head>
		<title>後臺管理</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/icons/heart.ico"/>
		<style>
			body {
				background-color: #FFF6CC;
				margin: 0;
				padding: 0;
			}			
			nav a {
				color: inherit; /*移除超連結顏色*/
				text-decoration: none; /*移除超連結底線*/
				color: #111111;
				font-size: 25px; 
				display: block;
				padding:10px
			}
			nav a:hover {
				background-color: #FF8800; 
				color: #FFFFFF;
			}
			nav > ul {
				padding: 0;
				list-style: none; /*移除項目符號*/
				background-color: #FFBB66; 
				margin: 0;
			}
			.flex-nav {
				display: flex;
				justify-content: center;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
				function show(t){
					$.ajax({
						url: t,
						method: "PODT",
						data: {
						},
						success: function (data) {
							$('#show').html(data);
						}
					});
				}
		</script>
	</head>
	<body>
		<?php
			if(isset($_SESSION["url"])&& $_SESSION["url"]!=""){
				if($_SESSION["url"]=="s" || $_SESSION["url"]=="p"){
					echo "<script>show('user_management.php');</script>";
				}else if($_SESSION["url"]=="mood_thermometer" || $_SESSION["url"]=="adaptation_scale_sw"){
					echo "<script>show('studentapp_history.php');</script>";
				}
			}
		?>
		<div style="height:0.1%"></div>
		<h1 align="center" style="color:#222222">Accompany Interaction(後臺管理)</h1>
		<nav>
			<ul class="flex-nav">
				<li><a href="javascript:show('user_management.php');"><b>使用者管理</b></a></li>
				<li><a href="javascript:show('app_history.php');"><b>App紀錄查詢</b></a></li>
				<li><a href="javascript:show('scale.php');"><b>量表管理</b></a></li>
				<li><a href="javascript:location.href='index.php';"><b>登出</b></a></li>
			</ul>
		</nav>
		<div id='show'></div>
	</body>
</html>