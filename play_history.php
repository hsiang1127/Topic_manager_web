<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>兒童遊玩紀錄</title>
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
		<table align='center' width='55%'>
			<?php
				$sel_play_history=mysqli_query($conn,"select * from `play_history`");
				$n = mysqli_num_rows($sel_play_history);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>		
				<tr>
					<th width='20%'>學號</th>
					<th width='20%'>遊戲種類</th>
					<th width='25%'>遊玩時間</th>
					<th width='20%'>時長</th>
					<th></th>
				</tr>
			<?php		
					while($sel_play_history_ok=mysqli_fetch_array($sel_play_history)){
					echo "
						<tr>
							<td>$sel_play_history_ok[student_id]</td>
						";
						if($sel_play_history_ok['game']==1){
							echo "<td>拼圖</td>";
						}else{
							echo "<td>認識情緒</td>";
						}
					echo "	
							<td>$sel_play_history_ok[play_date]</td>
							<td>$sel_play_history_ok[play_time]秒</td>
							<td>
								<button class='button button_del' onclick=\"show('play_history_del.php?id=$sel_play_history_ok[play_id]')\"><b>刪除</b></button>
							</td>
						</tr>
					";
				}
				}
			?>
		</table>
	</body>
</html>