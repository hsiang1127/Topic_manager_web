<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生心情日記填寫紀錄</title>
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
					show_apphistory('mood_diary_w.php?n='+s1);
				}else if(stu!=""){
					show_apphistory('mood_diary_w.php?stu='+stu+"&n="+s1);
				}*/
				show_apphistory('mood_diary_w.php?n='+s1);
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='95%'>
			
			<?php
				if(isset($_GET['n'])){
					$n=($_GET['n']*10)-10;
					$sel_diary=mysqli_query($conn,"SELECT * FROM `diary` ORDER BY `student_id`,`write_diary_time` limit ".$n.",10");
				}else{
					$sel_diary=mysqli_query($conn,"SELECT * FROM `diary` ORDER BY `student_id`,`write_diary_time`");
				}
				//$sel_diary=mysqli_query($conn,"SELECT * FROM `diary` ORDER BY `student_id`,`write_diary_time`");
				$n = mysqli_num_rows($sel_diary);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th>學生帳號</th>
						<th>心情</th>
						<th>天氣</th>
						<th>和誰在一起</th>
						<th>發生時間</th>
						<th>最近發生什麼事?</th>
						<th>我當時的想法</th>
						<th>這件事有什麼新的想法</th>
						<th>我應該要怎麼樣處理這件事</th>
						<th>生氣時間</th>
						<th>給自己的分數</th>
						<th>填寫時間</th>
						<th>次數</th>
						<th></th>
					</tr>	
			<?php
				}
				$user="";
				$user_ok="";
				$number=1;
				while($sel_diary_ok=mysqli_fetch_array($sel_diary)){
					if($user==""){
						$user=$sel_diary_ok['student_id'];
						$user_ok=$sel_diary_ok['student_id'];
					}else{
						$user_ok=$sel_diary_ok['student_id'];
					}
					echo "
						<tr>
							<td>$sel_diary_ok[student_id]</td>
							<td>$sel_diary_ok[mood]</td>
							<td>$sel_diary_ok[weather]</td>
							<td>$sel_diary_ok[person]</td>
							<td>$sel_diary_ok[time]</td>
							<td>$sel_diary_ok[content]</td>
							<td>$sel_diary_ok[content2]</td>
							<td>$sel_diary_ok[content3]</td>
							<td>$sel_diary_ok[content4]</td>
							<td>
					";
							echo (strtotime($sel_diary_ok['write_time_end']) - strtotime($sel_diary_ok['write_time_start']))/ (60);
					echo "
							分鐘</td>
							<td>$sel_diary_ok[fraction]</td>
							<td>$sel_diary_ok[write_diary_time]</td>
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
							<td><button class='button button_del' onclick=\"show_apphistory('mood_diary_del.php?id=$sel_diary_ok[diary_id]')\"><b>刪除</b></button></td>
						</tr>
					";
					/*echo "			
							<td>
								<button class='button' onclick=\"show('mood_diary_data.php?id=$sel_diary_ok[diary_id]')\"><b>詳細資料</b></button>
							</td>
						</tr>
					";*/
				}
			?>
		</table>
		<?php
			//查詢資料筆數
			$sel_number=mysqli_query($conn,"SELECT * FROM `diary`");
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