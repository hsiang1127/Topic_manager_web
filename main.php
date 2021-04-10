<?php  
	session_start();
	/*if (!isset($_SESSION['login'])){
		die("請您登入系統~");
	}
	
	if ($_SESSION['login']!=1){
		die("請您依正常管道登入;)");
	}*/
?>
<html>
    <header>
		<title>後臺管理</title>
		<meta charset="UTF-8">
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
	</header>
	<body>
		<?php
			if(isset($_SESSION["url"])&& $_SESSION["url"]!=""){
				echo "<script>show('user_management.php');</script>";
			}
		?>
		<div style="height:0.1%"></div>
		<h1 align="center" style="color:#222222">i好心情(後臺管理)</h1>
		<nav>
			<ul class="flex-nav">
				<li><a href="javascript:show('user_management.php');"><b>使用者管理</b></a></li>
				<li><a href="javascript:show('play_history.php');"><b>兒童遊玩紀錄</b></a></li>
				<li><a href=""><b>學生心情</b></a></li>
				<li><a href=""><b>學生日記</b></a></li>
				<li><a href="javascript:location.href='index.php';"><b>登出</b></a></li>
			</ul>
		</nav>
		<div id='show'></div>
	</body>
</html>