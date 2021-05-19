<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>頻率管理</title>
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
		<table align='center' width='20%'>
			
			<?php
				$sel_frequency=mysqli_query($conn,"SELECT * FROM `frequency`");
				$n = mysqli_num_rows($sel_frequency);
				if($n==0){
					echo "<h1 align='center'><font color='#FF3333'>目前無紀錄資料!!</font></h1>";
				}else{
			?>
					<tr>
						<th width="50%">頻率編號</th>
						<th width="50%">頻率名稱</th>
					</tr>
			<?php		
				}
				while($sel_frequency_ok=mysqli_fetch_array($sel_frequency)){
					echo "
						<tr>
							<td>$sel_frequency_ok[frequency_id]</td>
							<td>$sel_frequency_ok[frequency]</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>