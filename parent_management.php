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
		<table align='center' width='20%'>
			<!--<tr>
				<th width="50%">家長帳號</th>
				<th>學生帳號</th>
				<th>與學生的關係</th>
				<th>是否與學生同住</th>
				<th>在家誰對孩子照顧或管教</th>
				<th>家中排行</th>
				<th>兄弟姐妹數</th>
				<th>家中收入來源</th>
				<th></th>
				
			</tr>-->
			<?php
				/*$sel_parent=mysqli_query($conn,"SELECT `r`.*,`p`.`password` FROM `parent` as `p` 
												INNER JOIN `relationship` as `r` on `r`.`parent_id`=`p`.`parent_id`");*/
												
				$sel_parent=mysqli_query($conn,"SELECT * FROM `parent`");
				if(mysqli_num_rows($sel_parent)>0){
					echo "
						<tr>
							<th width='50%'>家長帳號</th>
							<th></th>
							
						</tr>
					";
					while($sel_parent_ok=mysqli_fetch_array($sel_parent)){
						echo "
							<tr>
								<td>$sel_parent_ok[parent_id]</td>
							";
						/*echo "	
								<td>$sel_parent_ok[student_id]</td>
								<td>$sel_parent_ok[relationship]</td>
								<td>$sel_parent_ok[cohabitation]</td>
								<td>$sel_parent_ok[discipline]</td>
								<td>$sel_parent_ok[home_order]</td>
								<td>$sel_parent_ok[brothers_sisters]</td>
								<td>$sel_parent_ok[income]</td>
						";*/
						echo "
								<td>
									<button class='button button_upd' onclick=\"show_management('parent_upd.php?user=$sel_parent_ok[parent_id]')\"><b>修改</b></button>
									<button class='button button_del' style='' onclick=\"location.href='parent_del_ok.php?user=$sel_parent_ok[parent_id]'\"><b>刪除</b></button>
								</td>
							</tr>
						";
					}
				}else{
					echo "<h1 align='center'><font color='#FF3333'>目前無家長資料!!</font></h1>";
				}
				
			?>
		</table>
	</body>
</html>