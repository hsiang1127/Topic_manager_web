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
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='40%'>
			<tr>
				<th width="25%">學號</th>
				<th width="25%">遊戲種類</th>
				<th width="25%">遊玩時間</th>
				<th width="25%">時長</th>
			</tr>
			<?php
				$sel_play_history=mysqli_query($conn,"select * from `play_history`");
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
							<td>$sel_play_history_ok[play_time]分</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>