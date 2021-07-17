<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>孩子的情緒行為填寫紀錄</title>
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
			.black_overlay{ 
				display: none; 
				position: absolute; 
				top: 0%; 
				left: 0%; 
				width: 100%; 
				height: 100%; 
				background-color: black; 
				z-index:1001; 
				-moz-opacity: 0.8; 
				opacity:.80; 
				filter: alpha(opacity=88); 
			} 
			.white_content { 
				display: none; 
				position: absolute; 
				top: 5%; 
				left: 72%; 
				width: 20%; 
				height: 85%; 
				padding: 20px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<h3 align='center' style="">
			量表數值　1-總是這樣　2-經常這樣　3-有時這樣　4-很少這樣　5-從不這樣　
			<button class='button' onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><b>量表題目</b></button>
		<h3>
		<table align='center' width='90%'>
			
			<?php
				$sel_mood_disorders_scale=mysqli_query($conn,"SELECT * FROM `mood_disorders_scale_w` ORDER BY `write_time` desc");
				$n = mysqli_num_rows($sel_mood_disorders_scale);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>家長帳號</th>
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
						<th>Q11</th>
						<th>Q12</th>
						<th>Q13</th>
						<th>Q14</th>
						<th>Q15</th>
						<th>Q16</th>
						<th>Q17</th>
						<th>Q18</th>
						<th>Q19</th>
						<th>Q20</th>
						<th>Q21</th>
						<th>Q22</th>
						<th>Q23</th>
						<th>Q24</th>
						<th>Q25</th>
						<th>Q26</th>
						<th>Q27</th>
						<th>Q28</th>
						<th>填寫時間</th>
						<th></th>
					</tr>
			<?php		
				}
				while($sel_mood_disorders_scale_ok=mysqli_fetch_array($sel_mood_disorders_scale)){
					echo "
						<tr>
							<td>$sel_mood_disorders_scale_ok[parent_id]</td>
							<td>$sel_mood_disorders_scale_ok[q1]</td>
							<td>$sel_mood_disorders_scale_ok[q2]</td>
							<td>$sel_mood_disorders_scale_ok[q3]</td>
							<td>$sel_mood_disorders_scale_ok[q4]</td>
							<td>$sel_mood_disorders_scale_ok[q5]</td>
							<td>$sel_mood_disorders_scale_ok[q6]</td>
							<td>$sel_mood_disorders_scale_ok[q7]</td>
							<td>$sel_mood_disorders_scale_ok[q8]</td>
							<td>$sel_mood_disorders_scale_ok[q9]</td>
							<td>$sel_mood_disorders_scale_ok[q10]</td>
							<td>$sel_mood_disorders_scale_ok[q11]</td>
							<td>$sel_mood_disorders_scale_ok[q12]</td>
							<td>$sel_mood_disorders_scale_ok[q13]</td>
							<td>$sel_mood_disorders_scale_ok[q14]</td>
							<td>$sel_mood_disorders_scale_ok[q15]</td>
							<td>$sel_mood_disorders_scale_ok[q16]</td>
							<td>$sel_mood_disorders_scale_ok[q17]</td>
							<td>$sel_mood_disorders_scale_ok[q18]</td>
							<td>$sel_mood_disorders_scale_ok[q19]</td>
							<td>$sel_mood_disorders_scale_ok[q20]</td>
							<td>$sel_mood_disorders_scale_ok[q21]</td>
							<td>$sel_mood_disorders_scale_ok[q22]</td>
							<td>$sel_mood_disorders_scale_ok[q23]</td>
							<td>$sel_mood_disorders_scale_ok[q24]</td>
							<td>$sel_mood_disorders_scale_ok[q25]</td>
							<td>$sel_mood_disorders_scale_ok[q26]</td>
							<td>$sel_mood_disorders_scale_ok[q27]</td>
							<td>$sel_mood_disorders_scale_ok[q28]</td>
							<td>$sel_mood_disorders_scale_ok[write_time]</td>
							<td><button class='button button_del' onclick=\"show('mood_disorders_scale_data_del.php?id=$sel_mood_disorders_scale_ok[w_scale_id]')\"><b>刪除</b></button></td>
						</tr>	
					";
					/*echo "
							<td>
								<button class='button' onclick=\"show('adaptation_scale_sdata.php?id=$sel_mood_disorders_scale_ok[w_scale_id]')\"><b>詳細資料</b></button>
							</td>
					";*/
				}
			?>
		</table>
		<div id="light" class="white_content" align='left'>
			<h3 style="color: #0066FF">情緒障礙量表題目</h3>
			<?php
				//查詢社會適應量表題目並存到陣列
				$arrayq=[];
				$sel_mood_disorders_scale=mysqli_query($conn,"SELECT * FROM `mood_disorders_scale`");
				while($sel_mood_disorders_scale_ok=mysqli_fetch_array($sel_mood_disorders_scale)){
					array_push($arrayq,$sel_mood_disorders_scale_ok['question']);
				}
				
				for($i=0;$i<count($arrayq);$i++){
					$ii=$i+1;
					echo "Q$ii.$arrayq[$i]<br/>";
				}
			?>
			<p/>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">關閉視窗</a>
		</div> 
        <div id="fade" class="black_overlay"></div>
	</body>
</html>