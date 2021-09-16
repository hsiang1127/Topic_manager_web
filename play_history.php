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
			function qq(){
				var s1;
				if(document.getElementById("s1")){
					s1=document.getElementById("s1").value;
				}else{
					s1=1;
				}
				/*var stu=document.getElementById("stu").value;
				if(stu==""){
					show_apphistory('play_history.php?n='+s1);
				}else if(stu!=""){
					show_apphistory('play_history.php?stu='+stu+"&n="+s1);
				}*/
				show_apphistory('play_history.php?n='+s1);
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='55%'>
			<?php
				if(isset($_GET['n'])){
					$n=($_GET['n']*10)-10;
					$sel_play_history=mysqli_query($conn,"select * from `play_history` ORDER BY `play_date` ASC limit ".$n.",10");
				}else{
					$sel_play_history=mysqli_query($conn,"select * from `play_history` ORDER BY `play_date` ASC limit 0,10");
				}
				//$sel_play_history=mysqli_query($conn,"select * from `play_history` ORDER BY `play_date` ASC ");
				$n = mysqli_num_rows($sel_play_history);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>		
				<tr>
					<th width='20%'>學號</th>
					<th width='20%'>遊戲種類</th>
					<th width='25%'>遊玩時間</th>
					<th width='20%'>時長</th>
					<th></th>
				</tr>
			<?php		
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
							<td>$sel_play_history_ok[play_time]秒</td>
							<td>
								<button class='button button_del' onclick=\"show('play_history_del.php?id=$sel_play_history_ok[play_id]')\"><b>刪除</b></button>
							</td>
						</tr>
					";
				}
				}
			?>
		</table>
		<?php
			//查詢資料筆數
			$sel_number=mysqli_query($conn,"SELECT * FROM `play_history`");
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