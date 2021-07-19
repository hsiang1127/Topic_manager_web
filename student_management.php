<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>學生資料管理</title>
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
		<table align='center' width='60%'>
			<tr>
				<th>學生帳號</th>
				<th>學號(班級座號)</th>
				<th>姓名</th>
				<th>性別</th>
				<th>生日</th>
				<th"></th>
			</tr>
			<?php
				$sel_student=mysqli_query($conn,"SELECT `s`.*,`r`.`student_id` as `r_student_id` FROM `student` as `s` 
												 LEFT JOIN `relationship` as `r` on `r`.`student_id`=`s`.`user_id` 
												 ORDER BY `s`.`user_id`");
				if(mysqli_num_rows($sel_student)>0){
					while($sel_student_ok=mysqli_fetch_array($sel_student)){
						echo "
							<tr>
								<td>$sel_student_ok[user_id]</td>
								<td>$sel_student_ok[student_id]</td>
								<td>$sel_student_ok[student_name]</td>
								<td>$sel_student_ok[sex]</td>
								<td>$sel_student_ok[birthday]</td>
						";
						if($sel_student_ok['r_student_id']==null){
							echo "
								<td align='left'>
									<button class='button button_upd' onclick=\"show_management('student_upd.php?user=$sel_student_ok[user_id]')\"><b>修改</b></button>
									<button class='button button_del' onclick=\"location.href='student_del_ok.php?user=$sel_student_ok[user_id]'\"><b>刪除</b></button>
									<button class='button' onclick=\"show_management('relationship_ins.php?id=$sel_student_ok[user_id]')\"><b>親子綁定</b></button>
								</td>
							";
						}else{
							echo "
								<td align='left'>
									<button class='button button_upd' onclick=\"show_management('student_upd.php?user=$sel_student_ok[user_id]')\"><b>修改</b></button>
									<button class='button button_del' onclick=\"location.href='student_del_ok.php?user=$sel_student_ok[user_id]'\"><b>刪除</b></button>
									<button class='button' onclick=\"show_management('relationship_sel.php?id=$sel_student_ok[user_id]')\"><b>查看親子資料</b></button>
								</td>
							";
						}
						echo "
							</tr>
						";
					}
				}else{
					echo "<h1 align='center'><font color='#FF3333'>目前學生資料!!</font></h1>";
				}
				
			?>
		</table>
	</body>
</html>