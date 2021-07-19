<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>家長與孩子的互動填寫紀錄</title>
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
				left: 75%; 
				width: 20%; 
				height: 50%; 
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
				left: 32%; 
				width: 12%; 
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
				left: 35%; 
				width: 25%; 
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
				left: 38%; 
				width: 35%; 
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
				left: 41%; 
				width: 25%; 
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
				left: 44%; 
				width: 30%; 
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
				left: 47%; 
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
		<table align='center' width='50%'>
			
			<?php
				$sel_interactive_scale_w=mysqli_query($conn,"SELECT * FROM `interactive_scale_w` ORDER BY `parent_id`,`number`");
				$n = mysqli_num_rows($sel_interactive_scale_w);
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
						<th>填寫時間</th>
						<th>次數</th>
						<th></th>
					</tr>
			<?php		
				}
				while($sel_interactive_scale_w_ok=mysqli_fetch_array($sel_interactive_scale_w)){
					echo "
						<tr>
							<td>$sel_interactive_scale_w_ok[parent_id]</td>
							<td>$sel_interactive_scale_w_ok[q1]</td>
							<td>$sel_interactive_scale_w_ok[q2]</td>
							<td>$sel_interactive_scale_w_ok[q3]</td>
							<td>$sel_interactive_scale_w_ok[q4]</td>
							<td>$sel_interactive_scale_w_ok[q5]</td>
							<td>$sel_interactive_scale_w_ok[q6]</td>
							<td>$sel_interactive_scale_w_ok[write_time]</td>
							<td>$sel_interactive_scale_w_ok[number]</td>
							<td><button class='button button_del' onclick=\"show('interactive_scale_data_del.php?id=$sel_interactive_scale_w_ok[w_scale_id]')\"><b>刪除</b></button></td>
						</tr>	
					";
					/*echo "
							<td>
								<button class='button' onclick=\"show('adaptation_scale_sdata.php?id=$sel_interactive_scale_w_ok[w_scale_id]')\"><b>詳細資料</b></button>
							</td>
					";*/
				}
			?>
		</table>
		<div id="light" class="white_content" align='left'>
			<h3 style="color: #0066FF">互動量表題目</h3>
			<?php
				//查詢互動量表題目並存到陣列
				$arrayq=[];
				$sel_interactive_scale=mysqli_query($conn,"SELECT * FROM `interactive_scale`");
				while($sel_interactive_scale_ok=mysqli_fetch_array($sel_interactive_scale)){
					array_push($arrayq,$sel_interactive_scale_ok['question']);
				}
				
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
        <div id="fade" class="black_overlay"></div>
	</body>
</html>