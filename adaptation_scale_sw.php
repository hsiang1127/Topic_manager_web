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
				top: 23%; 
				left: 72%; 
				width: 20%; 
				height: 40%; 
				padding: 20px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content1 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 35%; 
				width: 13%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content2 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 37%; 
				width: 16%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
			.white_content3 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 39%; 
				width: 14%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
			.white_content4 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 41%; 
				width: 12%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			}
			.white_content5 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 43%; 
				width: 15%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 	
			.white_content6 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 45%; 
				width: 13%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 	
			.white_content7 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 47%; 
				width: 18%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 	
			.white_content8 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 49%; 
				width: 14%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
			.white_content9 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 51%; 
				width: 13%; 
				height: 3%; 
				padding: 5px; 
				border: 5px solid #FFBB66; 
				background-color: #FFF6CC; 
				z-index:1002; 
				overflow: auto; 
			} 
			.white_content10 { 
				display: none; 
				position: absolute; 
				top: 23%; 
				left: 53%; 
				width: 14%; 
				height: 3%; 
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
		<table align='center' width='40%'>
			
			<?php
				$sel_adaptation=mysqli_query($conn,"SELECT * FROM `adaptation_scale_w` where `student_id`<>\"\" ORDER BY `write_time` desc");
				$n = mysqli_num_rows($sel_adaptation);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>學生帳號</th>
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
		<?php
			//查詢社會適應量表題目並存到陣列
			$arrayq=[];
			$sel_adaptation_scale=mysqli_query($conn,"SELECT * FROM `adaptation_scale`");
			while($sel_adaptation_scale_ok=mysqli_fetch_array($sel_adaptation_scale)){
				array_push($arrayq,$sel_adaptation_scale_ok['question']);
			}
			
			/*for($i=0;$i<count($arrayq);$i++){
				$ii=$i+1;
				echo "Q$ii.$arrayq[$i]<br/>";
			}*/
		?>
		<div id="light" class="white_content" align='left'>
			<h3 style="color: #0066FF">社會適應量表題目</h3>
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
        <div id="fade" class="black_overlay"></div>
	</body>
</html>