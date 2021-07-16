<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生影片上傳紀錄</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
			.button_upd {
				border: 2px solid #5599FF;
			}
			.button_upd:hover {
				background-color: #5599FF;
				color: white;
			}
			.button_del {
				border: 2px solid #FF3333;
			}
			.button_del:hover {
				background-color: #FF3333;
				color: white;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='50%'>
			
			<?php
				$sel_video=mysqli_query($conn,"SELECT * FROM `video`");
				$n = mysqli_num_rows($sel_video);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="30%">學號</th>
						<th width="30%">影片網址</th>
						<th width="30%">上傳時間</th>
						<th width="10%"></th>
					</tr>	
			<?php
				}
				while($sel_video_ok=mysqli_fetch_array($sel_video)){
					echo "
						<tr>
							<td>$sel_video_ok[student_id]</td>
							<td><a href='$sel_video_ok[video_url]'>影片連結</a></td>
							<td>$sel_video_ok[write_time]</td>
							<td>
								<button class='button button_del' onclick=\"show('video_del.php?id=$sel_video_ok[video_id]')\"><b>刪除</b></button>
							</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>