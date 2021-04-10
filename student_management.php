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
				<th>學號</th>
				<th>姓名</th>
				<th>年級</th>
				<th>班級</th>
				<th>性別</th>
				<th>生日</th>
				<th>爸爸年齡</th>
				<th>媽媽年齡</th>
				<th></th>
			</tr>
			<?php
				$sel_student=mysqli_query($conn,"select * from `student`");
				while($sel_student_ok=mysqli_fetch_array($sel_student)){
					echo "
						<tr>
							<td>$sel_student_ok[student_id]</td>
							<td>$sel_student_ok[student_name]</td>
							<td>$sel_student_ok[student_year]</td>
							<td>$sel_student_ok[student_class]</td>
							<td>$sel_student_ok[sex]</td>
							<td>$sel_student_ok[birthday]</td>
							<td>$sel_student_ok[father_year]</td>
							<td>$sel_student_ok[mom_year]</td>	
							<td>
								<button class='button button_upd' onclick=\"show('student_upd.php?user=$sel_student_ok[student_id]')\"><b>修改</b></button>
								<button class='button button_del' onclick=\"show('student_del_ok.php?user=$sel_student_ok[student_id]')\"><b>刪除</b></button>
							</td>
						</tr>
					";
				}
			?>
		</table>
	</body>
</html>