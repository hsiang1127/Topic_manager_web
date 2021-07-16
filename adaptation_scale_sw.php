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
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='40%'>
			
			<?php
				$sel_adaptation=mysqli_query($conn,"SELECT * FROM `adaptation_scale_w` where `student_id`<>\"\"");
				$n = mysqli_num_rows($sel_adaptation);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="40%">學生帳號</th>
						<th width="40%">填寫時間</th>
						<th width="20%"></th>
					</tr>
			<?php		
				}
				while($sel_adaptation_ok=mysqli_fetch_array($sel_adaptation)){
					echo "
						<tr>
							<td>$sel_adaptation_ok[student_id]</td>
							<td>$sel_adaptation_ok[write_time]</td>
							<td>
								<button class='button' onclick=\"show('adaptation_scale_sdata.php?id=$sel_adaptation_ok[w_scale_id]')\"><b>詳細資料</b></button>
							</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>