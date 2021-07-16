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
			function upd(id){
				var q1=document.getElementById("q1").value;
				var q2=document.getElementById("q2").value;
				var q3=document.getElementById("q3").value;
				var q4=document.getElementById("q4").value;
				var q5=document.getElementById("q5").value;
				var q6=document.getElementById("q6").value;
				var q7=document.getElementById("q7").value;
				var q8=document.getElementById("q8").value;
				var q9=document.getElementById("q9").value;
				var q10=document.getElementById("q10").value;
				q1++;
				q2++;
				q3++;
				q4++;
				q5++;
				q6++;
				q7++;
				q8++;
				q9++;
				q10++;
				window.location.href="adaptation_scale_sdata_upd.php?id="+id+"&q1="+q1+"&q2="+q2+"&q3="+q3+"&q4="+q4+"&q5="+q5+"&q6="+q6+"&q7="+q7+"&q8="+q8+"&q9="+q9+"&q10="+q10;
				
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='30%'>
			
			<?php
				//查詢頻率資料並存到陣列
				$array=[];
				$sel_frequency=mysqli_query($conn,"SELECT * FROM `frequency`");
				while($sel_frequency_ok=mysqli_fetch_array($sel_frequency)){
					array_push($array,$sel_frequency_ok['frequency']);
				}

				//查詢社會適應量表題目並存到陣列
				$arrayq=[];
				$sel_adaptation_scale=mysqli_query($conn,"SELECT * FROM `adaptation_scale`");
				while($sel_adaptation_scale_ok=mysqli_fetch_array($sel_adaptation_scale)){
					array_push($arrayq,$sel_adaptation_scale_ok['question']);
				}
				
				$sel_adaptation=mysqli_query($conn,"SELECT * FROM `adaptation_scale_w` where `w_scale_id`='$_GET[id]'");
				$n = mysqli_num_rows($sel_adaptation);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
					if($sel_adaptation_ok=mysqli_fetch_array($sel_adaptation)){
						echo "
							<tr>
								<th width='50%'>學號</th>
								<td>$sel_adaptation_ok[student_id]</td>
							</tr>
							<tr>
								<th>$arrayq[0]</th>
								<td>
									<select name='q1' id='q1'>
						";
										$data=$sel_adaptation_ok['q1'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[1]</th>
								<td>
									<select name='q2' id='q2'>
						";
										$data=$sel_adaptation_ok['q2'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[2]</th>
								<td>
									<select name='q3' id='q3'>
						";
										$data=$sel_adaptation_ok['q3'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>	
							<tr>
								<th>$arrayq[3]</th>
								<td>
									<select name='q4' id='q4'>
						";
										$data=$sel_adaptation_ok['q4'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[4]</th>
								<td>
									<select name='q5' id='q5'>
						";
										$data=$sel_adaptation_ok['q5'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[5]</th>
								<td>
									<select name='q6' id='q6'>
						";
										$data=$sel_adaptation_ok['q6'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[6]</th>
								<td>
									<select name='q7' id='q7'>
						";
										$data=$sel_adaptation_ok['q7'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[7]</th>
								<td>
									<select name='q8' id='q8'>
						";
										$data=$sel_adaptation_ok['q8'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[8]</th>
								<td>
									<select name='q9' id='q9'>
						";
										$data=$sel_adaptation_ok['q9'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>$arrayq[9]</th>
								<td>
									<select name='q10' id='q10'>
						";
										$data=$sel_adaptation_ok['q10'];
										$n=$data-1;
										for($i=0;$i<count($array);$i++){
											if($i==$n){
												echo "<option value='$i' selected>$array[$i]</option>";
											}else{
												echo "<option value='$i'>$array[$i]</option>";
											}
											
										}
									
						echo "
									</select>
								</td>
							</tr>
							<tr>
								<th>填寫時間</th>
								<td>$sel_adaptation_ok[write_time]</td>
							</tr>
							<tr>
								<td colspan='2'>
									<button class='button button_upd' onclick=\"upd($sel_adaptation_ok[w_scale_id])\"><b>修改</b></button>
									<button class='button button_del' onclick=\"show('adaptation_scale_sdata_del.php?id=$sel_adaptation_ok[w_scale_id]')\"><b>刪除</b></button>
								</td>
							</tr>
						";
					}
				}	
			?>
		</table>
	</body>
</html>