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
		<table align='center' width='30%'>
			<?php
				$sel_parent=mysqli_query($conn,"SELECT `s`.*,`r`.`rlts_id`,`r`.`parent_id`,`r`.`student_id` as `r_student_id`,`r`.`relationship`,`r`.`cohabitation`,`r`.`discipline`,`r`.`home_order`,`r`.`brothers_sisters`,`r`.`income` FROM `student` as `s` 
												LEFT JOIN `relationship` as `r` on `r`.`student_id`=`s`.`user_id`
												where `s`.`user_id`='$_GET[id]'");
												
				//$sel_parent=mysqli_query($conn,"SELECT * FROM `parent`");
				if(mysqli_num_rows($sel_parent)>0){
					if($sel_parent_ok=mysqli_fetch_array($sel_parent)){
						echo "
							<tr>
								<th width='50%'>家長帳號</th>
								<td>$sel_parent_ok[parent_id]</td>
							</tr>
							<tr>
								<th>學生帳號</th>
								<td>$sel_parent_ok[r_student_id]</td>
							</tr>
							<tr>
								<th>與學生的關係</th>
								<td>$sel_parent_ok[relationship]</td>
							</tr>
							<tr>
								<th>是否與學生同住</th>
								<td>$sel_parent_ok[cohabitation]</td>
							</tr>
							<tr>
								<th>在家誰對孩子照顧或管教</th>
								<td>$sel_parent_ok[discipline]</td>
							</tr>
							<tr>
								<th>家中排行</th>
						";
							if($sel_parent_ok['home_order']==0){
								echo "<td></td>";
							}else{
								echo "<td>$sel_parent_ok[home_order]</td>";
							}
						echo "
							</tr>
							<tr>
								<th>兄弟姐妹數</th>
						";
							if($sel_parent_ok['brothers_sisters']==0){
								echo "<td></td>";
							}else{
								echo "<td>$sel_parent_ok[brothers_sisters]</td>";
							}
						echo "
							</tr>
							<tr>
								<th>藥物</th>
								<td>$sel_parent_ok[drug]</td>
							</tr>
							<tr>
								<th>家中收入來源</th>
								<td>$sel_parent_ok[income]</td>
							</tr>
							<tr>
								<th>父親教育程度</th>
								<td>$sel_parent_ok[f_educate]</td>
							</tr>
							<tr>
								<th>母親教育程度</th>
								<td>$sel_parent_ok[m_educate]</td>
							</tr>
							<tr>
								<td colspan='2'>
									<button class='button button_del' style='' onclick=\"show('relationship_del.php?id=$sel_parent_ok[r_student_id]')\"><b>刪除</b></button>
								</td>
							</tr>							
								
								
								
						";
					}
				}else{
					echo "<h1 align='center'><font color='#FF3333'>查無親子資料!!</font></h1>";
				}
				
			?>
		</table>
	</body>
</html>