<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>家長資料管理</title>
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
			<tr>
				<th>帳號</th>
				<th>小孩</th>
				<th>姓名</th>
			</tr>
			<?php
				$sel_parent=mysqli_query($conn,"select * from `parent`");
				while($sel_parent_ok=mysqli_fetch_array($sel_parent)){
					echo "
						<tr>
							<td>$sel_parent_ok[parent_id]</td>
							<td>$sel_parent_ok[child]</td>
							<td>$sel_parent_ok[parent_name]</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>