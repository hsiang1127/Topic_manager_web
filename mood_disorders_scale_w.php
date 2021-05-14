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
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='30%'>
			
			<?php
				$sel_mood_disorders_scale_w=mysqli_query($conn,"SELECT * FROM `mood_disorders_scale_w`");
				$n = mysqli_num_rows($sel_mood_disorders_scale_w);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="50%">家長帳號</th>
						<th width="50%">填寫時間</th>
					</tr>
			<?php		
				}
				while($sel_mood_disorders_scale_w_ok=mysqli_fetch_array($sel_mood_disorders_scale_w)){
					echo "
						<tr>
							<td>$sel_mood_disorders_scale_w_ok[parent_id]</td>
							<td>$sel_mood_disorders_scale_w_ok[write_time]</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>