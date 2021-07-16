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
			function parent_upd(){
				var user=document.getElementById("user").value;
				var password=document.getElementById("password").value;
				//var child=document.getElementById("child").value;
				//var name=document.getElementById("p_name").value;
				if(password==""){
					alert('密碼未輸入!!');
					return false;
				}
				window.location.href="parent_upd_ok.php?user="+user+"&password="+password;
			}
		</script>
	</header>
	<body>
		<?php
			$sel=mysqli_query($conn,"select * from `parent` where `parent_id`='$_GET[user]'");
			if($sel_ok=mysqli_fetch_array($sel)){
		?>
		</p>
		<table align='center' width='30%'>
			<tr>
				<th width='40%'>帳號</th>
				<td><?php echo $_GET['user'];?></td>
				<input type="hidden" id="user" name="user" value="<?php echo $_GET['user'];?>">
			</tr>
			<tr>
				<th>密碼</th>
				<td><input type='text' id='password' name='password' style="text-align:center;" value='<?php echo $sel_ok['password'];?>'></td>
			</tr>
			<tr>
				<td colspan='2'><button class='button' onclick="parent_upd();"><b>確認修改</b></button></td>
			</tr>
		</table>
		<?php		
			}
		?>
	</body>
</html>