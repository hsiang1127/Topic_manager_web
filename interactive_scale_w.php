<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>與孩子的互動填寫紀錄</title>
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
				$sel_interactive=mysqli_query($conn,"SELECT * FROM `interactive_scale_w`");
				$n = mysqli_num_rows($sel_interactive);
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
				while($sel_interactive_ok=mysqli_fetch_array($sel_interactive)){
					echo "
						<tr>
							<td>$sel_interactive_ok[parent_id]</td>
							<td>$sel_interactive_ok[write_time]</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>