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
				height: 88%; 
				padding: 20px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
			.white_content1 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 10%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content2 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 12%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content3 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 14%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content4 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 16.2%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content5 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 18.2%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content6 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 20.3%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content7 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 22.4%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content8 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 24.5%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content9 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 26.6%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content10 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 28.4%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content11 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 31%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content12 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 33.6%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content13 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 36%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content14 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 38.6%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content15 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 41.2%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content16 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 43.8%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content17 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 46.4%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content18 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 49%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content19 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 51.6%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content20 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 54.2%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content21 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 56.8%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content22 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 59.5%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content23 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 62.1%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content24 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 64.7%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content25 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 67.4%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content26 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 70.1%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content27 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 72.8%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content28 { 
				display: none; 
				position: absolute; 
				top: 22%; 
				left: 75.5%; 
				width: 20%; 
				height: 4%; 
				padding: 5px; 
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
				$sel_mood_disorders_scale=mysqli_query($conn,"SELECT * FROM `mood_disorders_scale_w` ORDER BY `parent_id`,`write_time`");
				$n = mysqli_num_rows($sel_mood_disorders_scale);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>家長帳號</th>
						<th onMouseOver="document.getElementById('light1').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'">Q1</th>
						<th onMouseOver="document.getElementById('light2').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light2').style.display='none';document.getElementById('fade').style.display='none'">Q2</th>
						<th onMouseOver="document.getElementById('light3').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light3').style.display='none';document.getElementById('fade').style.display='none'">Q3</th>
						<th onMouseOver="document.getElementById('light4').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light4').style.display='none';document.getElementById('fade').style.display='none'">Q4</th>
						<th onMouseOver="document.getElementById('light5').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light5').style.display='none';document.getElementById('fade').style.display='none'">Q5</th>
						<th onMouseOver="document.getElementById('light6').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light6').style.display='none';document.getElementById('fade').style.display='none'">Q6</th>
						<th onMouseOver="document.getElementById('light7').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light7').style.display='none';document.getElementById('fade').style.display='none'">Q7</th>
						<th onMouseOver="document.getElementById('light8').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light8').style.display='none';document.getElementById('fade').style.display='none'">Q8</th>
						<th onMouseOver="document.getElementById('light9').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light9').style.display='none';document.getElementById('fade').style.display='none'">Q9</th>
						<th onMouseOver="document.getElementById('light10').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light10').style.display='none';document.getElementById('fade').style.display='none'">Q10</th>
						<th onMouseOver="document.getElementById('light11').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light11').style.display='none';document.getElementById('fade').style.display='none'">Q11</th>
						<th onMouseOver="document.getElementById('light12').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light12').style.display='none';document.getElementById('fade').style.display='none'">Q12</th>
						<th onMouseOver="document.getElementById('light13').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light13').style.display='none';document.getElementById('fade').style.display='none'">Q13</th>
						<th onMouseOver="document.getElementById('light14').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light14').style.display='none';document.getElementById('fade').style.display='none'">Q14</th>
						<th onMouseOver="document.getElementById('light15').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light15').style.display='none';document.getElementById('fade').style.display='none'">Q15</th>
						<th onMouseOver="document.getElementById('light16').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light16').style.display='none';document.getElementById('fade').style.display='none'">Q16</th>
						<th onMouseOver="document.getElementById('light17').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light17').style.display='none';document.getElementById('fade').style.display='none'">Q17</th>
						<th onMouseOver="document.getElementById('light18').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light18').style.display='none';document.getElementById('fade').style.display='none'">Q18</th>
						<th onMouseOver="document.getElementById('light19').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light19').style.display='none';document.getElementById('fade').style.display='none'">Q19</th>
						<th onMouseOver="document.getElementById('light20').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light20').style.display='none';document.getElementById('fade').style.display='none'">Q20</th>
						<th onMouseOver="document.getElementById('light21').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light21').style.display='none';document.getElementById('fade').style.display='none'">Q21</th>
						<th onMouseOver="document.getElementById('light22').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light22').style.display='none';document.getElementById('fade').style.display='none'">Q22</th>
						<th onMouseOver="document.getElementById('light23').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light23').style.display='none';document.getElementById('fade').style.display='none'">Q23</th>
						<th onMouseOver="document.getElementById('light24').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light24').style.display='none';document.getElementById('fade').style.display='none'">Q24</th>
						<th onMouseOver="document.getElementById('light25').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light25').style.display='none';document.getElementById('fade').style.display='none'">Q25</th>
						<th onMouseOver="document.getElementById('light26').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light26').style.display='none';document.getElementById('fade').style.display='none'">Q26</th>
						<th onMouseOver="document.getElementById('light27').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light27').style.display='none';document.getElementById('fade').style.display='none'">Q27</th>
						<th onMouseOver="document.getElementById('light28').style.display='block';document.getElementById('fade').style.display='block'" onMouseOut="document.getElementById('light28').style.display='none';document.getElementById('fade').style.display='none'">Q28</th>
						<th>填寫時間</th>
						<th>次數</th>
						<th></th>
					</tr>
			<?php		
				}
				$user="";
				$user_ok="";
				$number=1;
				while($sel_mood_disorders_scale_ok=mysqli_fetch_array($sel_mood_disorders_scale)){
					if($user==""){
						$user=$sel_mood_disorders_scale_ok['parent_id'];
						$user_ok=$sel_mood_disorders_scale_ok['parent_id'];
					}else{
						$user_ok=$sel_mood_disorders_scale_ok['parent_id'];
					}
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
					";
							if($user_ok==$user){
								echo "<td>$number</td>";
								$number++;
							}else{
								$number=1;
								echo "<td>$number</td>";
								$number++;
								$user=$user_ok;
							}
					echo "
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
		<?php
			//查詢情緒障礙量表題目並存到陣列
			$arrayq=[];
			$sel_mood_disorders_scale=mysqli_query($conn,"SELECT * FROM `mood_disorders_scale`");
			while($sel_mood_disorders_scale_ok=mysqli_fetch_array($sel_mood_disorders_scale)){
				array_push($arrayq,$sel_mood_disorders_scale_ok['question']);
			}
		?>
		<div id="light" class="white_content" align='left'>
			<h3 style="color: #0066FF">情緒障礙量表題目</h3>
			<?php
				for($i=0;$i<count($arrayq);$i++){
					$ii=$i+1;
					echo "Q$ii.$arrayq[$i]<br/>";
				}	
			?>
			<p/>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">關閉視窗</a>
		</div> 
		<div id="light1" class="white_content1" align='center'>
			<?php 
				echo "Q1.$arrayq[0]";
			?>	
		</div>
		<div id="light2" class="white_content2" align='center'>
			<?php 
				echo "Q2.$arrayq[1]";
			?>	
		</div>
		<div id="light3" class="white_content3" align='center'>
			<?php 
				echo "Q3.$arrayq[2]";
			?>	
		</div>
		<div id="light4" class="white_content4" align='center'>
			<?php 
				echo "Q4.$arrayq[3]";
			?>	
		</div>
		<div id="light5" class="white_content5" align='center'>
			<?php 
				echo "Q5.$arrayq[4]";
			?>	
		</div>
		<div id="light6" class="white_content6" align='center'>
			<?php 
				echo "Q6.$arrayq[5]";
			?>	
		</div>
		<div id="light7" class="white_content7" align='center'>
			<?php 
				echo "Q7.$arrayq[6]";
			?>	
		</div>
		<div id="light8" class="white_content8" align='center'>
			<?php 
				echo "Q8.$arrayq[7]";
			?>	
		</div>
		<div id="light9" class="white_content9" align='center'>
			<?php 
				echo "Q9.$arrayq[8]";
			?>	
		</div>
		<div id="light10" class="white_content10" align='center'>
			<?php 
				echo "Q10.$arrayq[9]";
			?>	
		</div>
		<div id="light11" class="white_content11" align='center'>
			<?php 
				echo "Q11.$arrayq[10]";
			?>	
		</div>
		<div id="light12" class="white_content12" align='center'>
			<?php 
				echo "Q12.$arrayq[11]";
			?>	
		</div>
		<div id="light13" class="white_content13" align='center'>
			<?php 
				echo "Q13.$arrayq[12]";
			?>	
		</div>
		<div id="light14" class="white_content14" align='center'>
			<?php 
				echo "Q14.$arrayq[13]";
			?>	
		</div>
		<div id="light15" class="white_content15" align='center'>
			<?php 
				echo "Q15.$arrayq[14]";
			?>	
		</div>
		<div id="light16" class="white_content16" align='center'>
			<?php 
				echo "Q16.$arrayq[15]";
			?>	
		</div>
		<div id="light17" class="white_content17" align='center'>
			<?php 
				echo "Q17.$arrayq[16]";
			?>	
		</div>
		<div id="light18" class="white_content18" align='center'>
			<?php 
				echo "Q18.$arrayq[17]";
			?>	
		</div>
		<div id="light19" class="white_content19" align='center'>
			<?php 
				echo "Q19.$arrayq[18]";
			?>	
		</div>
		<div id="light20" class="white_content20" align='center'>
			<?php 
				echo "Q20.$arrayq[19]";
			?>	
		</div>
		<div id="light21" class="white_content21" align='center'>
			<?php 
				echo "Q21.$arrayq[20]";
			?>	
		</div>
		<div id="light22" class="white_content22" align='center'>
			<?php 
				echo "Q22.$arrayq[21]";
			?>	
		</div>
		<div id="light23" class="white_content23" align='center'>
			<?php 
				echo "Q23.$arrayq[22]";
			?>	
		</div>
		<div id="light24" class="white_content24" align='center'>
			<?php 
				echo "Q24.$arrayq[23]";
			?>	
		</div>
		<div id="light25" class="white_content25" align='center'>
			<?php 
				echo "Q25.$arrayq[24]";
			?>	
		</div>
		<div id="light26" class="white_content26" align='center'>
			<?php 
				echo "Q26.$arrayq[25]";
			?>	
		</div>
		<div id="light27" class="white_content27" align='center'>
			<?php 
				echo "Q27.$arrayq[26]";
			?>	
		</div>
		<div id="light28" class="white_content28" align='center'>
			<?php 
				echo "Q28.$arrayq[27]";
			?>	
		</div>
        <div id="fade" class="black_overlay"></div>
	</body>
</html>