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
			.button_upd {
				border: 2px solid #5599FF;
			}
			.button_upd:hover {
				background-color: #5599FF;
				color: white;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function stu_upd(){
				var user=document.getElementById("user").value;
				var password=document.getElementById("password").value;
				var stuid=document.getElementById("stuid").value;
				var name=document.getElementById("name").value;
				//var s_year=document.getElementById("s_year").value;
				//var s_class=document.getElementById("s_class").value;
				var sex=document.querySelector('input[name="sex"]:checked').value;
				var birthday=document.getElementById("birthday").value;
				//var m_year=document.getElementById("m_year").value;
				//var f_year=document.getElementById("f_year").value;
				if(password==""){
					alert('密碼未輸入!!');
					return false;
				}
				if(stuid==""){
					alert('學號未輸入!!');
					return false;
				}
				if(name==""){
					alert('姓名未輸入!!');
					return false;
				}
				window.location.href="student_upd_ok.php?user="+user+"&password="+password+"&stuid="+stuid+"&name="+name+"&sex="+sex+"&birthday="+birthday;
			}
		</script>
	</header>
	<body>
		<?php
			$sel=mysqli_query($conn,"select * from `student` where `user_id`='$_GET[user]'");
			if($sel_ok=mysqli_fetch_array($sel)){
		?>
		</p>
		<table align='center' width='30%'>
			<tr>
				<th width='40%'>學生帳號</th>
				<td><?php echo $_GET['user'];?></td>
				<input type="hidden" id="user" name="user" value="<?php echo $_GET['user'];?>">
			</tr>
			<tr>
				<th>密碼</th>
				<td><input type='text' id='password' name='password' style="text-align:center;" value='<?php echo $sel_ok['password'];?>'></td>
			</tr>
			<tr>
				<th>學號</th>
				<td><input type='text' id='stuid' name='stuid' style="text-align:center;" value='<?php echo $sel_ok['student_id'];?>'></td>
			</tr>
			<tr>
				<th>姓名</th>
				<td><input type='text' id='name' name='name' style="text-align:center;" value='<?php echo $sel_ok['student_name'];?>'></td>
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
						}else if($sel_ok['sex']=="女"){
					?>
							<input type='radio' id='sex' name='sex' value='男'>男
							<input type='radio' id='sex1' name='sex' value='女' checked>女
					<?php		
						}else{
					?>
							<input type='radio' id='sex' name='sex' value='男'>男
							<input type='radio' id='sex1' name='sex' value='女'>女
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
				<td colspan='2'><button class='button button_upd' onclick="stu_upd();"><b>確認修改</b></button></td>
			</tr>
		</table>
		<?php		
			}
		?>
	</body>
</html>