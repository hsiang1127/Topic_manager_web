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

		</script>
	</header>
	<body>
		</p>
		<table align='center' width='40%'>
			<tr>
				<th width='25%'>帳號</th>
				<th width='25%'>小孩</th>
				<th width='25%'>姓名</th>
				<th width='25%'></th>
			</tr>
			<?php
				$sel_parent=mysqli_query($conn,"select * from `parent`");
				while($sel_parent_ok=mysqli_fetch_array($sel_parent)){
					echo "
						<tr>
							<td>$sel_parent_ok[parent_id]</td>
							<td>$sel_parent_ok[child]</td>
							<td>$sel_parent_ok[parent_name]</td>
							<td>
								<button class='button button_upd' onclick=\"show('parent_upd.php?user=$sel_parent_ok[parent_id]')\"><b>修改</b></button>
								<button class='button button_del' style='' onclick=\"show('parent_del_ok.php?user=$sel_parent_ok[parent_id]')\"><b>刪除</b></button>
							</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>