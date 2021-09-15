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
			function qq(){
				var s1;
				if(document.getElementById("s1")){
					s1=document.getElementById("s1").value;
				}else{
					s1=1;
				}
				/*var stu=document.getElementById("stu").value;
				if(stu==""){
					show_apphistory('mood_thermometer_w.php?n='+s1);
				}else if(stu!=""){
					show_apphistory('mood_thermometer_w.php?stu='+stu+"&n="+s1);
				}*/
				show_apphistory('mood_thermometer_w.php?n='+s1);
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='90%'>
			
			<?php
				if(isset($_GET['n'])){
					$sel_mood_thermometer=mysqli_query($conn,"SELECT * FROM `mood_thermometer` ORDER BY `student_id`,`write_time` limit 0,10");
				}else{
					$sel_mood_thermometer=mysqli_query($conn,"SELECT * FROM `mood_thermometer` ORDER BY `student_id`,`write_time` limit ".$n.",10");
				}
				//$sel_mood_thermometer=mysqli_query($conn,"SELECT * FROM `mood_thermometer` ORDER BY `student_id`,`write_time`");
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
						<th>次數</th>
						<th></th>
					</tr>	
			<?php
				}
				$user="";
				$user_ok="";
				$number=1;
				while($sel_mood_thermometer_ok=mysqli_fetch_array($sel_mood_thermometer)){
					if($user==""){
						$user=$sel_mood_thermometer_ok['student_id'];
						$user_ok=$sel_mood_thermometer_ok['student_id'];
					}else{
						$user_ok=$sel_mood_thermometer_ok['student_id'];
					}
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
		<?php
			//查詢資料筆數
			$sel_number=mysqli_query($conn,"SELECT * FROM `mood_thermometer`");
			$data_number=mysqli_num_rows($sel_number);
			if($data_number!=0){
				$data_number_remove=intval($data_number/10);
				$data_number_remain=$data_number%10;
				$data_number_result=0;
				//echo "<script>alert('$data_number_remove')</script>";
				if($data_number_remove<1 && $data_number_remain!=0){
					$data_number_result=1;
				}else if($data_number_remove>=1 && $data_number_remain==0){
					$data_number_result=$data_number_remove;
				}else if($data_number_remove>=1 && $data_number_remain!=0){
					$data_number_result=$data_number_remove+1;
				}
				echo "
					<p/>
				";
				//if($n!=0){
					echo "
						<center>
							<select id='s1' onChange='qq();' style='font-size: 20px;'>
					";
						for($i=1;$i<=$data_number_result;$i++){
							if(isset($_GET['n'])){
								if($i==$_GET['n']){
									echo "<option value='".$i."' selected>第".$i."頁</option>";
								}else{
									echo "<option value='".$i."' >第".$i."頁</option>";
								}
							}else{
								if($i==1){
									echo "<option value='".$i."' selected>第".$i."頁</option>";
								}else{
									echo "<option value='".$i."' >第".$i."頁</option>";
								}
							}
						}
						echo "	
							</select>
						</center>
					";
				//}
			}
		?>
	</body>
</html>