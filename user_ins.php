<?php  
	include('conn.php');
?>
<html>
    <header>
		<title>新增使用者</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/table.css">
		<link rel="stylesheet" type="text/css" href="css/button.css">
		<style>
		
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function parent(){
				var x=document.getElementById("species").value;
				if(x=="parent"){
					var result_style = document.getElementById('child_tr').style;
					result_style.display = 'none';
				}else if(x=="student"){
					var result_style = document.getElementById('child_tr').style;
					result_style.display = 'table-row';
				}
			}
			function userins(){
				var x=document.getElementById("species").value;
				var user=document.getElementById("user").value;
				var password=document.getElementById("password").value;
				var child=document.getElementById("child").value;
				if(user==""){
					alert('帳號未輸入!!');
					return false;
				}
				if(password==""){
					alert('密碼未輸入!!');
					return false;
				}
				if(x=="parent"){
					/*if(child==""){
						alert('小孩學號未輸入!!');
						return false;
					}else{
						window.location.href="user_ins_ok.php?user="+user+"&password="+password+"&name="+name+"&child="+child+"&x="+x;
					}*/
					window.location.href="user_ins_ok.php?user="+user+"&password="+password+"&name="+name+"&x="+x;
				}else{
					if(child==""){
						alert('間隔未輸入!!');
						return false;
					}else{
						window.location.href="user_ins_ok.php?user="+user+"&password="+password+"&child="+child+"&x="+x;
					}
					//window.location.href="user_ins_ok.php?user="+user+"&password="+password+"&x="+x;
				}
				
			}
		</script>
	</header>
	<body>
		</p>
		<table align='center' width='30%'>
			<tr>
				<th width='40%'>種類</th>
				<td>
					<select name="species" id='species' onChange="parent();">
						<option value="student" selected>學生</option>
						<option value="parent" >家長</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>帳號</th>
				<td><input type='text' id='user' name='user'></td>
			</tr>
			<tr>
				<th>密碼</th>
				<td><input type='text' id='password' name='password'></td>
			</tr>
			<tr id='child_tr' style="display: table-row;">
				<th>間隔</th>
				<td>
					<input type='number' id='child' name='child'>
					<!--使用html的datalist實現-->
					<!--<input list="ice-cream-flavors" id="child" name="child" />
					<datalist id="ice-cream-flavors">-->
					<?php
						/*$selstu=mysqli_query($conn,"select * from `student`");
						while($selstu_ok=mysqli_fetch_array($selstu)){
							echo "<option value=\"$selstu_ok[student_id]\">";
						}*/
					?>
					<!--</datalist>-->
				</td>
			</tr>
			<tr>
				<td colspan='2'><button class='button' id='ins' name='ins' onclick="userins();"><b>確認新增</b></button></td>
			</tr>
		</table>
	</body>
</html>