<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>修改學生資料</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function stu_upd(){
				var user=document.getElementById("user").value;
				var password=document.getElementById("password").value;
				var name=document.getElementById("name").value;
				var s_year=document.getElementById("s_year").value;
				var s_class=document.getElementById("s_class").value;
				var sex=document.querySelector('input[name="sex"]:checked').value;
				var birthday=document.getElementById("birthday").value;
				var m_year=document.getElementById("m_year").value;
				var f_year=document.getElementById("f_year").value;
				if(password==""){
					alert('密碼未輸入!!');
					return false;
				}
				if(name==""){
					alert('姓名未輸入!!');
					return false;
				}
				if(s_year==""){
					alert('年級未輸入!!');
					return false;
				}
				if(s_class==""){
					alert('班級未輸入!!');
					return false;
				}
				if(m_year==""){
					alert('媽媽年齡未輸入!!');
					return false;
				}
				if(f_year==""){
					alert('爸爸年齡未輸入!!');
					return false;
				}
				window.location.href="student_upd_ok.php?user="+user+"&password="+password+"&name="+name+"&s_year="+s_year+"&s_class="+s_class+"&sex="+sex+"&birthday="+birthday+"&m_year="+m_year+"&f_year="+f_year;
			}
		</script>
	</header>
	<body>
		<?php
			$sel=mysqli_query($conn,"select * from `student` where `student_id`='$_GET[user]'");
			if($sel_ok=mysqli_fetch_array($sel)){
		?>
		</p>
		<table align='center' width='30%'>
			<tr>
				<th width='40%'>學號</th>
				<td><?php echo $_GET['user'];?></td>
				<input type="hidden" id="user" name="user" value="<?php echo $_GET['user'];?>">
			</tr>
			<tr>
				<th>密碼</th>
				<td><input type='text' id='password' name='password' style="text-align:center;" value='<?php echo $sel_ok['password'];?>'></td>
			</tr>
			<tr>
				<th>姓名</th>
				<td><input type='text' id='name' name='name' style="text-align:center;" value='<?php echo $sel_ok['student_name'];?>'></td>
			</tr>
			<tr>
				<th>年級</th>
				<td><input type='text' id='s_year' name='s_year' style="text-align:center;" value='<?php echo $sel_ok['student_year'];?>'></td>
			</tr>
			<tr>
				<th>班級</th>
				<td><input type='text' id='s_class' name='s_class' style="text-align:center;" value='<?php echo $sel_ok['student_class'];?>'></td>
			</tr>
			<tr>
				<th>性別</th>
				<td>
					<?php
						if($sel_ok['sex']=="男"){
					?>
							<input type='radio' id='sex' name='sex' value='男' checked>男
							<input type='radio' id='sex1' name='sex' value='女'>女
					<?php
						}else{
					?>
							<input type='radio' id='sex' name='sex' value='男'>男
							<input type='radio' id='sex1' name='sex' value='女' checked>女
					<?php		
							
						}
					?>

				</td>
			</tr>
			<tr>
				<th>生日</th>
				<td><input type='date' id='birthday' name='birthday' style="text-align:center;" value='<?php echo $sel_ok['birthday'];?>'></td>
			</tr>
			<tr>
				<th>媽媽年齡</th>
				<td><input type='text' id='m_year' name='m_year' style="text-align:center;" value='<?php echo $sel_ok['mom_year'];?>'></td>
			</tr>
			<tr>
				<th>爸爸年齡</th>
				<td><input type='text' id='f_year' name='f_year' style="text-align:center;" value='<?php echo $sel_ok['father_year'];?>'></td>
			</tr>
			<tr>
				<td colspan='2'><button class='button' onclick="stu_upd();"><b>確認修改</b></button></td>
			</tr>
		</table>
		<?php		
			}
		?>
	</body>
</html>