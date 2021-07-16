<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生情緒溫度計填寫紀錄</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
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
		<table align='center' width='90%'>
			
			<?php
				$sel_mood_thermometer=mysqli_query($conn,"SELECT * FROM `mood_thermometer`");
				$n = mysqli_num_rows($sel_mood_thermometer);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>學生帳號</th>
						<th>心情指數</th>
						<th>符合心情的表情</th>
						<th>當時身體反應</th>
						<th>當時的想法</th>
						<th>可以冷靜的方法</th>
						<th>結束時心情指數</th>
						<th>填寫時間</th>
						<th></th>
					</tr>	
			<?php
				}
				while($sel_mood_thermometer_ok=mysqli_fetch_array($sel_mood_thermometer)){
					echo "
						<tr>
							<td>$sel_mood_thermometer_ok[student_id]</td>
							<td>$sel_mood_thermometer_ok[tmmt_mood1]</td>
							<td>$sel_mood_thermometer_ok[tmmt_mood2]</td>
							<td>$sel_mood_thermometer_ok[tmmt_body]</td>
							<td>$sel_mood_thermometer_ok[tmmt_idea]</td>
							<td>$sel_mood_thermometer_ok[tmmt_calmidea]</td>
							<td>$sel_mood_thermometer_ok[tmmt_mood3]</td>
							<td>$sel_mood_thermometer_ok[write_time]</td>
							<td>
								<button class='button button_del' onclick=\"location.href='mood_thermometer_del.php?id=$sel_mood_thermometer_ok[tmmt_id]'\"><b>刪除</b></button>
							</td>
						</tr>	
					";
					
					/*echo "	
						<td>
								<button class='button' onclick=\"show('mood_thermometer_data.php?id=$sel_mood_thermometer_ok[tmmt_id]')\"><b>詳細資料</b></button>
							</td>
						</tr>
					";*/
				}
			?>
		</table>
	</body>
</html>