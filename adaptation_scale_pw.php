<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>孩子最近的表現填寫紀錄</title>
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
				$sel_adaptation=mysqli_query($conn,"SELECT * FROM `adaptation_scale_w` where `parent_id`<>\"\"");
				$n = mysqli_num_rows($sel_adaptation);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="40%">家長帳號</th>
						<th width="40%">填寫時間</th>
						<th width="20%"></th>
					</tr>
			<?php		
				}
				while($sel_adaptation_ok=mysqli_fetch_array($sel_adaptation)){
					echo "
						<tr>
							<td>$sel_adaptation_ok[parent_id]</td>
							<td>$sel_adaptation_ok[write_time]</td>
							<td><button class='button' id='teacher' name='teacher'><b>詳細資料</b></button></td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>