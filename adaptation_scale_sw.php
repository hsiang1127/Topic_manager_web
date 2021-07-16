<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生社會適應量表填寫紀錄</title>
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
		<h4 align='center'>量表數值   1-總是這樣   2-經常這樣   3-有時這樣   4-很少這樣   5-從不這樣<h4>
		<table align='center' width='40%'>
			
			<?php
				$sel_adaptation=mysqli_query($conn,"SELECT * FROM `adaptation_scale_w` where `student_id`<>\"\"");
				$n = mysqli_num_rows($sel_adaptation);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>學生帳號</th>
						<th>Q1</th>
						<th>Q2</th>
						<th>Q3</th>
						<th>Q4</th>
						<th>Q5</th>
						<th>Q6</th>
						<th>Q7</th>
						<th>Q8</th>
						<th>Q9</th>
						<th>Q10</th>
						<th>填寫時間</th>
						<th></th>
					</tr>
			<?php		
				}
				while($sel_adaptation_ok=mysqli_fetch_array($sel_adaptation)){
					echo "
						<tr>
							<td>$sel_adaptation_ok[student_id]</td>
							<td>$sel_adaptation_ok[q1]</td>
							<td>$sel_adaptation_ok[q2]</td>
							<td>$sel_adaptation_ok[q3]</td>
							<td>$sel_adaptation_ok[q4]</td>
							<td>$sel_adaptation_ok[q5]</td>
							<td>$sel_adaptation_ok[q6]</td>
							<td>$sel_adaptation_ok[q7]</td>
							<td>$sel_adaptation_ok[q8]</td>
							<td>$sel_adaptation_ok[q9]</td>
							<td>$sel_adaptation_ok[q10]</td>
							<td>$sel_adaptation_ok[write_time]</td>
							<td><button class='button button_del' onclick=\"show('adaptation_scale_sdata_del.php?id=$sel_adaptation_ok[w_scale_id]')\"><b>刪除</b></button></td>
						</tr>	
					";
					/*echo "
							<td>
								<button class='button' onclick=\"show('adaptation_scale_sdata.php?id=$sel_adaptation_ok[w_scale_id]')\"><b>詳細資料</b></button>
							</td>
					";*/
				}
			?>
		</table>
	</body>
</html>